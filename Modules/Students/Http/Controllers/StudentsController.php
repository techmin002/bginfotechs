<?php

namespace Modules\Students\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Modules\Students\Entities\Student;
use Modules\Students\Entities\StudentFees;
use Spatie\Permission\Models\Role;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('user')->get();
        return view('students::student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students::student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:255|confirmed',
            'qualification'     => 'required|string|max:255',
            'address'     => 'required',
            'training'     => 'required|string|max:255',
            'total_fees'     => 'required',
            'paid_fees'     => 'required',
            'admission_date'     => 'required',
            'complete_date'     => 'required',
        ]);
        $due_fees = $request->total_fees - $request->paid_fees;

        $imageName = '';
        if ($request->image)
        {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('upload/images/users'), $imageName);

        }
        $role_id = Role::where('name',$request->role)->first();
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'image'    => $imageName,
            'role_id'    => $request->role,
            'status' => $request->status
        ]);

        $user->assignRole($request->role);
        $students = Student::create([
            'name' => $request['name'],
            'user_id' => $user->id,
            'address' => $request['address'],
            'training' => $request['training'],
            'qualification' => $request['qualification'],
            'admission_date' => $request['admission_date'],
            'complete_date' => $request['complete_date'],
            'total_fees' => $request['total_fees'],
            'paid_fees' => $request['paid_fees'],
            'due_fees' => $due_fees,
        ]);
        $students = StudentFees::create([
            'fees' => $request['paid_fees'],
            'date' => $request['admission_date'],
            'method' => $request['method'] ?? 'cash',
            'student_id' => $students->id
        ]);
        $payments = new Payment();
        $payments->amount = $request->paid_fees;
        $payments->methods = $request->method;
        $payments->table = 'StudentFee';
        $payments->table_id = $students->id;
        $payments->receipt = $imageName;
        $payments->paid_date= $request->admission_date;
        $payments->save();
        return redirect()->route('students.index')->with('success', 'Student Added Successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $student = Student::select('name','id')->where('id',$id)->with('fees')->first();
        return view('students::student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::where('id',$id)->with('user')->first();
        return view('students::student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        
        $student = Student::where('id',$id)->first();
        $due_fees = $request->total_fees - $request->paid_fees;
        $student->update([
            'name' => $request['name'],
            'address' => $request['address'],
            'training' => $request['training'],
            'qualification' => $request['qualification'],
            'admission_date' => $request['admission_date'],
            'complete_date' => $request['complete_date'],
            'total_fees' => $request['total_fees'],
            'paid_fees' => $request['paid_fees'],
            'due_fees' => $due_fees,
        ]);
        $user = User::where('id', $student->user_id)->first();
        $imageName = $user->image;
        if ($request->image)
        {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('upload/images/users'), $imageName);

        }
        $user->update([
            'name'     => $request->name,
            'image' => $imageName
        ]);
        return redirect()->route('students.index')->with('success', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $user = User::findOrFail($student->user_id);
        $student->delete();
        $user->delete();

        return redirect()->route('students.index')->with('success', 'Student Deleted Successfully');

    }
}
