<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Client;
use Carbon\Carbon;
use App\Models\Time;

class ProjectController extends Controller
{
    public function projectassign(){
        $user = User::all();
        return view('/projects.projectassign', compact('user'));
    }
    public function assign(){
        $data = Client::all();
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
    public function addclient(){
        return view('/projects.clients');
    }
    public function clientsave(Request $request){
        $request->validate([
            'clientname' => 'required',
            'country' => 'required',
            'email' => 'required' ,
            'company' => 'required',
            'address' => 'required'
        ]);
        $user = new Client();
        $user->clientname = $request->clientname;
        $user->country = $request->country;
        $user->email = $request->email;
        $user->company = $request->company;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('message','Client Add Successfully');
    }
    public function clientstable(){
        $data = Client::all();
        return view('/projects.ClientsTable', compact('data'));
    }



    public function nametimesave(Request $request){
        $request->validate([
            'clientname' => 'required'
        ]);
        $user = new Time();
        $user->name = $request->name;
        $user->save();
        return redirect()->back();
    }
    public function timetable(){
        $data = Time::all();
        return view('/projects.timer', compact('data'));
    }
    // public function checkin(){
    //     $data = new Time();
    //     $data->checkin = Carbon::now()->toTimeString();
    //    $data->save();
    //    return redirect()->back();
    // }
    // public function checkout(Request $request, $id){
    //     $data = Time::find($id);
    //     $data->checkout = Carbon::now()->toTimeString();
    //     $data = Time::where('id',$id)->update($request);
    //     $data->save();
    //    return redirect()->back();
    // }
    
    
}
