<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class TeacherController extends Controller
{
    public function dashboard()
    {
        return view('user.teacher.dashboard');
    }
}
