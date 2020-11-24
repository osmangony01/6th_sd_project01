<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Session;
use App\Models\Assignment;
use App\Models\Question;

class GroupController extends Controller
{
    public function group()
    {
        $course_code = session('course_code');

        $group = Group::where('course_code','=',$course_code)->get();
        return view('user.teacher.course.group',['groups'=>$group]);
        //return view('user.teacher.course.group');
    }

    public function  create_group(Request $request)
    {
        //echo "ok";
        $group = new Group();

        $group->course_code = $request->course_code;
        $group->group_name = $request->group_name;
        $group->description = $request->description;

        if($group->save()){
            //return redirect()->to('/teacher/dashboard');
            return redirect()->back()->with('success','Inserted Successfully!!');
         }

    }

    public function specific_group($gp)
    {
        Session::put('gp_name',$gp);
        $question = Question::where('group_name','=',$gp)->get();
        return view('user.teacher.course.view_group',['questions'=>$question]);
    }
}
