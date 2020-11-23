<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('user.student.dashboard');
    }

    public function myallcourse()
    {
        return view('user.student.my_course');
    }

    public function allcourse()
    {
        $c = Course::all();
        return view('user.student.all_course',['crs'=>$c]);
    }

    public function profile()
    {
        return view('user.student.edit_profile');
    }

    public function profile_edit()
    {

    }

    public function mywork()
    {
        return view('user.student.activity');
    }


    public function contact()
    {

    }

    public function contact_us()
    {

    }
}
