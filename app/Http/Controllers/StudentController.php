<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Students\Entities\Student;

class StudentController extends Controller
{
    public function login(){
        return view('students.login');
    }
    public function studentDashboard()
    {
        $user = Auth::user()->id;
        $student = Student::where('user_id',$user)->with('fees','user')->first();
        return view('students.dashboard',compact('student'));
    }
    public function studentPassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
    
        $user = Auth::user();
    
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with(['error' => 'The provided password does not match your current password.']);
        }
    
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        return back()->with('success', 'Password successfully updated!');
    }
}
