<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpecificSession;

class SessionController extends Controller
{
    public function showSession()
    {
        return view('admin.pages.session');
    }

    public function all()
    {
        $ses = SpecificSession::all();
        return view('admin.pages.view_session',['session'=>$ses]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'session'     => 'required|max:15',
            'year'    => 'required|max:5',
        ]);

        $specific_session = new SpecificSession();

        $specific_session->session_name = $request->session;
        $specific_session->year = $request->year;
        
        if($specific_session->save()){
           return redirect()->back()->with('success','Inserted Successfully!!');
        }
    }

    public function edit()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
}
