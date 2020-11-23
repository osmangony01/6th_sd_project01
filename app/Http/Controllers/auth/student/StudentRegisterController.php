<?php

namespace App\Http\Controllers\auth\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;

class StudentRegisterController extends Controller
{
    public function show()
    {
        return view('auth.student_register');  
    }
    public function register(Request $request)
    {
        
        #echo "ok";
        $validatedData = $request->validate([
            'name'   => 'required|max:100',
            'email'      => 'required|email|max:50',
            'password'   =>'required|min:8|max:20',
            'confirm_password' =>'required|min:8|max:20',
            'dob'      => 'required|date||before:tomorrow',
            'address'  => 'required|max:255',
        ]);

        $obj = new Registration();

        $pass = $request->password;
        $password = Hash::make($pass);

        $obj->name     = $request->name;
        $obj->email    = $request->email;
        $obj->password = $password;
        $obj->dob      = $request->dob;
        $obj->address  = $request->address;
        $obj->type     = "student";
        
        if($obj->save()){
           return redirect()->back()->with('success','Registration Successfully!!');
        }
    }
}
