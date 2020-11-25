<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $c = Course::count();
        $n = Enroll::count();
        return view('admin.pages.dashboard',['total_course'=>$c,'total_student'=>$n]);
    }

    
}
