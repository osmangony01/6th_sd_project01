<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('user.student.dashboard');
    }

    public function myallcourse()
    {
        $email = session('user3_email');
        $course = Enroll::where('student_email','=',$email)->get();

        return view('user.student.my_course',['courses'=>$course]);
        //return view('user.student.my_course');
    }

    public function allcourse()
    {
        $c = Course::all();
        return view('user.student.all_course',['crs'=>$c]);
    }

    public function enroll($id)
    {
        $c = Course::find($id);

        $enroll = new Enroll();

        $name = session('user3_name');
        $email = session('user3_email');

        $ss = 'pending';  
        
        $enroll->student_name = $name;
        $enroll->student_email = $email;
        $enroll->instructor_name = $c->instructor;
        $enroll->instructor_email = $c->instructor_email;
        $enroll->course_title = $c->course_title;
        $enroll->course_code = $c->course_code;
        $enroll->pic = $c->pic;
        $enroll->session = $c->session;
        $enroll->status = $ss;

        if($enroll->save()){
            //return redirect()->back()->with('success','Updated Successfully!!');
            return redirect()->to('/student/my-course');
        }
        
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
        $email = session('user3_email');
        $q = Assignment::where('student_email','=',$email)->get();

        //return view('user.student.activity');
        return view('user.student.activity',['question'=>$q]);
    }


    public function contact()
    {

    }

    public function contact_us()
    {

    }
}
