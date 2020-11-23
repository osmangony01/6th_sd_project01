<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpecificSession;
use App\Models\Course;
use Image;
use Illuminate\Support\Facades\DB;
use Session;

class CourseController extends Controller
{
    public function show()
    {
        $ses = SpecificSession::all();
        return view('user.teacher.create_course',['session'=>$ses]);
        // return view('user.teacher.create_course');
    }

    public function all()
    {
        $email = session('user2_email');
        //echo $email;
        $course = Course::where('instructor_email','=',$email)->get();
        return view('user.teacher.view_course',['courses'=>$course]);
    }

    public function all_session()
    {
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'session'      => 'required',
            'course_title' => 'required||max:100',
            'course_code'  => 'required|min:3|max:20',
            'credit'       => 'required|max:3',
            'image'        => 'image|mimes:jpeg,png,jpg,gif,svg'
            
        ]);
        
        $name = session('user2_name');
        $email = session('user2_email');

        $course = new Course();

        $image = $request->file('image');
        $image1 = Image::make($image);
        $imagePath = public_path().'/uploads/course/';
        $filename = time().'.png';
        $image1->save($imagePath.$filename);

        $course->course_title = $request->course_title;
        $course->course_code = $request->course_code;
        $course->session = $request->session;
        $course->credit = $request->credit;
        $course->description = $request->description;
        $course->instructor = $name;
        $course->instructor_email = $email;
        // $course->status = $request->;
        $course->pic = $filename;
        // $course->price = $request->;

        
        if($course->save()){
           return redirect()->back()->with('success','Inserted Successfully!!');
        }
    }

    public function editpage()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
    // public function upload(Request $request){
    //     $image = $request->file('filename');

    //     $image = Image::make($image);

    //     $imagePath = public_path().'/upload/image/';

    //     $filename = time().'.png';

    //     $image->save($imagePath.$filename);

    //     $imagemodel = new ImageModel();
    //     $imagemodel->filename =$filename;
        
    //     if($imagemodel->save()){
    //         return back()->with('success', 'Your images has been successfully Upload');
    //     }
    //     //return redirect()->route('images');
        
        
    // }
    // $this->validate($request, [
    //     'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
    //  ]);
    // $originalImage= $request->file('filename');
    // $thumbnailImage = Image::make($originalImage);
    // $thumbnailPath = public_path().'/thumbnail/';
    // $originalPath = public_path().'/images/';
    // $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
    // $thumbnailImage->resize(600,1000);
    // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

    // $imagemodel= new ImageModel();
    // $imagemodel->filename=time().$originalImage->getClientOriginalName();
    // $imagemodel->save();

    public function course($id)
    {
        $c = Course::find($id);
        Session::put('course_id',$c->id);
        Session::put('course_code',$c->course_code);
        Session::put('course_name',$c->course_title);
        //return view('user.teacher.view_specific_course',['course'=>$c]);
        return view('user.teacher.course.home',['course'=>$c]);
        //return view('user.teacher.view_specific_course');
    }
    public function home($id)
    {
        $c = Course::find($id);
        return view('user.teacher.course.home',['course'=>$c]);
    }

}
