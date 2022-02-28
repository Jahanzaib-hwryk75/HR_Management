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
            'projectname' => 'required',
            'clientname' => 'required',
            'projectlead' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'projectduration' => 'required'
        ]);
        $user = new Project();
        $user->projectname = $request->projectname;
        $user->clientname = $request->clientname;
        $user->projectlead = $request->projectlead;
        $user->startdate = $request->startdate;
        $user->enddate = $request->enddate;
        $user->projectduration = $request->projectduration;
        $user->save();
        return redirect()->back()->with('message','Project Assigned Successfully');
    }
    public function projectstable(){
        $data = Project::orderBy('id' , 'desc')->get();
        return view('projects.projectassign', compact('data'));
    }
}
