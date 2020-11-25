<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');



// for student registration
Route::get('/student-registration', 'auth\student\StudentRegisterController@show');
Route::post('/student-register', 'auth\student\StudentRegisterController@register');

// for teacher registration
Route::get('/teacher-registration', 'auth\teacher\TeacherRegisterController@show');
Route::post('/teacher-register', 'auth\teacher\TeacherRegisterController@register');

// for login user
Route::get('/login', 'auth\LoginController@showloginform');
Route::post('/login-request', 'auth\LoginController@login');
Route::get('/logout', 'auth\LoginController@logout');

//for student
Route::group(['middleware' => 'checkstudentloggedin'], function(){

    Route::get('/student/dashboard', 'student\StudentController@mywork');
    Route::get('/student/my-course', 'student\StudentController@myallcourse');

    Route::get('/student/all-course', 'student\StudentController@allcourse');

    Route::get('/student/enroll-course/{id}', 'student\StudentController@enroll');

    Route::get('/student/contact', 'student\StudentController@contact');
    Route::post('/student/contact-us', 'student\StudentController@contact_us');

    Route::get('/student/profile', 'student\StudentController@profile');
    Route::post('/student/profile_edit', 'student\StudentController@profile_edit');

    Route::get('/student/my-work', 'student\StudentController@mywork');

    

});


//for teacher
Route::group(['middleware' => 'checkteacherloggedin'], function(){
    
    Route::get('/teacher/dashboard', 'teacher\TeacherController@dashboard');
    Route::get('/teacher/view-course', 'teacher\CourseController@all');
    Route::get('/teacher/create-course', 'teacher\CourseController@show');
    Route::post('/teacher/store-course', 'teacher\CourseController@store');


    Route::get('/teacher/specific-course/{id}', 'teacher\CourseController@course');
    //Route::post('/teacher/specific-course', 'teacher\CourseController@scourse');
    Route::get('/teacher/course/home/{id}', 'teacher\CourseController@home');

    // teacher create group
    //Route::get('/teacher/create-group', 'teacher\GroupController@group');
    Route::get('/teacher/course/group', 'teacher\GroupController@group');
    Route::post('/teacher/create-group', 'teacher\GroupController@create_group');

    // view specific group
    Route::get('/teacher/course/specific-group/{gp}', 'teacher\GroupController@specific_group');

    // for question upload form
    Route::get('/teacher/course/question-upload', 'teacher\AssignmentController@show');
    Route::post('/teacher/question-save', 'teacher\AssignmentController@store');

    // view specific course people
    Route::get('/teacher/course/view-people', 'teacher\CourseController@people');
    Route::get('/teacher/course/approved/{id}', 'teacher\CourseController@approve');

    Route::get('/teacher/course/work', 'teacher\CourseController@work');
    Route::get('/teacher/course/assign-work', 'teacher\CourseController@create_work');

    
});


// for admin
Route::group(['middleware' => 'checkadminloggedin'], function(){

    Route::get('/admin/dashboard', 'admin\AdminController@dashboard');

    Route::get('/admin/session', 'admin\SessionController@showSession');
    Route::post('/admin/session-store', 'admin\SessionController@store');
    Route::get('/admin/view-session', 'admin\SessionController@all');
    Route::get('/admin/session-edit/{id}','admin\SessionController@edit');
    Route::post('/admin/update-session/{id}','admin\SessionController@update');
    Route::get('/admin/delete-session/{id}','admin\SessionController@delete');

});







// testing purpose


Route::get('/demo1', function () {
    return view('pages.demo1');
});

Route::get('/image', function () {
    return view('pages.image');
});

Route::get('/fileupload', function () {
    return view('pages.fileupload');
});





Route::get('/dash', function () {
    return view('user.student.dash');
});
Route::get('/dash2', function () {
    return view('user.student.dash2');
});

Route::get('/snav', function () {
    return view('pages.std_navbar');
});