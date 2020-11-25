<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Session;

class TeacherController extends Controller
{
    public function dashboard()
    {
        $c = Course::count();
        $email = session('user2_email');

        $s = Enroll::where('instructor_email','=',$email)->count();

        return view('user.teacher.dashboard',['total_course'=>$c,'total_student'=>$s]);
    }

    public function count_course()
    {

    }
}
