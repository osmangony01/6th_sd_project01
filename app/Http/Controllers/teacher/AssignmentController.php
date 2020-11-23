<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Image;
use Session;

class AssignmentController extends Controller
{
    public function show()
    {
        return view('user.teacher.course.question_upload');
    }

    public function store(Request $request)
    {
       
        // $validatedData = $request->validate([
        //     'filenames' => 'required|mimes:jpeg,png,jpg,gif,svg'
        // ]);
        //echo "console.log('ok')";

        $course_code = session('course_code');
        $group_name = session('gp_name');

        $images= $request->file('filenames');

        $count=1;
        foreach($images as $orginal){

            $multi_img = Image::make($orginal);

            $orginalImage = $orginal->getClientOriginalName();
            //$extension = $orginal->getClientOriginalExtension();
            $imagePath = public_path().'/uploads/course/question/';

            $saveImage =time().$count.$orginalImage;

            $multi_img->save($imagePath.$saveImage);

            $question = new Assignment();
            $question->course_code = $course_code;
            $question->group_name = $group_name;
            $question->question_set = $saveImage;
            $question->save();
                    
            $count++;
        }
       //return back()->with('success', 'Your images has been successfully Upload');
       return redirect()->to('/teacher/course/specific-group/'.$group_name);
       
    }
}
