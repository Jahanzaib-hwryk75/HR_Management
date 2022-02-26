<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projectassign(){
        $user = User::all();
        return view('/projects.projectassign', compact('user'));
    }
    public function assign(){
        $data = User::all();
        return view('/projects.assign', compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'username' => 'required',
            'projectname' => 'required',
            'projectdetails' => 'required'
        ]);
        $user = new Project();
        $user->username = $request->username;
        $user->projectname = $request->projectname;
        $user->projectdetails = $request->projectdetails;
        $user->save();
        return redirect()->back()->with('message','Project Assigned Successfully');
    }
    public function projectstable(){
        $data = Project::orderBy('id' , 'desc')->get();
        return view('projects.projectassign', compact('data'));
    }
}
