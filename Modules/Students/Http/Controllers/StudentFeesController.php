<?php

namespace Modules\Students\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Students\Entities\Student;
use Modules\Students\Entities\StudentFees;

class StudentFeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
    
        $request->validate([
            'fees'     => 'required|string|max:255',
            'date'    => 'required',
            'method' => 'required',
        ]);
        $student = Student::where('id',$request->student_id)->first();
        $paid_fees = $student->paid_fees + $request->fees;
        $due_fees = $student->total_fees - $paid_fees;
        $student->update([
            'paid_fees' => $paid_fees,
            'due_fees' => $due_fees
        ]);
        $imageName = '';
        if ($request->image)
        {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('upload/images/fees'), $imageName);

        }
        $students = StudentFees::create([
            'fees' => $request['fees'],
            'date' => $request['date'],
            'method' => $request['method'],
            'receipt' => $imageName,
            'student_id' => $request['student_id']
        ]);
        $payments = new Payment();
        $payments->amount = $request->fees;
        $payments->methods = $request->method;
        $payments->table = 'StudentFee';
        $payments->table_id = $student->id;
        $payments->receipt = $imageName;
        $payments->paid_date= $request->date;
        $payments->save();
        return redirect()->route('students.index')->with('success', 'Fees Added Successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('students::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('students::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
