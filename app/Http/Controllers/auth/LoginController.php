<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function showloginform()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            
            'email'    => 'required|email|max:50',
            'password' => 'required|min:8|max:30',
            
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = Registration::where('email','=',$email)->first();

        if(Hash::check($password, $user->password) && $user->type=="admin")
        { 
            Session::put('user_id',$user->id);
            Session::put('user_email',$user->email);
            Session::put('user_name',$user->name);
            return redirect()->to('/admin/dashboard');
        }
        else if(Hash::check($password, $user->password) && $user->type=="teacher")
        {
            Session::put('user2_id',$user->id);
            Session::put('user2_email',$user->email);
            Session::put('user2_name',$user->name);
            return redirect()->to('/teacher/dashboard');
        }
        else if(Hash::check($password, $user->password) && $user->type=="student")
        {
            Session::put('user3_id',$user->id);
            Session::put('user3_email',$user->email);
            Session::put('user3_name',$user->name);
            return redirect()->to('/student/dashboard');
        }
        
        else{
            return redirect()->back()->with('error','Invalid Email address or Password');
        }
    }
    public function logout(Request $request)
    {
        if ($request->session()->has('user_id')) 
        {
            $request->session()->forget('user_id');
            $request->session()->forget('user_email');
            $request->session()->forget('user_name');
            return redirect()->to('/login');
        }

        if ($request->session()->has('user2_id')) 
        {
            $request->session()->forget('user2_id');
            $request->session()->forget('user2_email');
            $request->session()->forget('user2_name');
            return redirect()->to('/home');
        }

        if ($request->session()->has('user3_id')) 
        {
            $request->session()->forget('user3_id');
            $request->session()->forget('user3_email');
            $request->session()->forget('user3_name');
            return redirect()->to('/home');
        }
    }
    
}
