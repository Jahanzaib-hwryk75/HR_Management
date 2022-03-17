<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Client;
use Carbon\Carbon;
use App\Models\Time;
use Illuminate\Support\Facades\DB;
use App\Models\employee;

class ProjectController extends Controller
{
    function data()
    {
        $data = new Time();
        $data->name = 'User';
        $data->save();
    }
    public function projectassign()
    {
        $user = User::all();
        return view('/projects.projectassign', compact('user'));
    }
    public function assign()
    {
        $data = Client::all();
        $employeedata = employee::all();
        return view('/projects.assign', compact('data' , 'employeedata'));
        
    }
    public function store(Request $request)
    {
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
        return redirect()->back()->with('message', 'Project Assigned Successfully');
    }
    public function projectstable()
    {
        $data = Project::orderby('id','DESC')->get();
        return view('projects.projectassign', compact('data'));
    } 
     public function checkin(Request $request, $id)
    {
        $data = Project::find($id);
        $data->checkin = Carbon::now()->toTimeString();
        $data->save();
       return redirect()->back();
    }
public function checkout(Request $request, $id)
    {
        $data = Project::find($id);
        $data->checkout = Carbon::now()->toTimeString();
        $data->save();
        $dataa = DB::Table('projects')->where('id', '=', $id)->selectRaw('time(sum(TIMEDIFF( checkout, checkin ))) as total')->first();
        $data = Project::find($id);
        $data->totaltime =Carbon::parse($dataa->total)->format('H:i:s');
        $data->save();
        return redirect()->back();
    }
    public function addclient()
    {
        return view('/projects.clients');
    }
    public function clientsave(Request $request)
    {
        $request->validate([
            'clientname' => 'required',
            'country' => 'required',
            'email' => 'required',
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
        return redirect()->back()->with('message', 'Client Add Successfully');
    }
    public function clientstable()
    {
        $data = Client::all();
        return view('/projects.ClientsTable', compact('data'));
    }

        public function nametimesave(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $user = new Time();
        $user->name = $request->name;
        $user->save();
        return redirect()->back();
    }
    // public function timetable()
    // {
    //     $userId = Auth::user()->id;
    //     $data = Time::where('user', $userId)->whereDate('created_at', Carbon::today())->orderby('created_at', 'DESC')->first();
    //     if (empty($data[''])) {
    //         $data = Time::whereDate('created_at', Carbon::today())->orderby('created_at', 'DESC')->get();
    //     }
    //     return view('/projects.timer', compact('data'));
    // }
    // public function checkin(Request $request, $id)
    // {
    //     $userId = Auth::user()->id;
    //     $data = Time::where('user', $userId)->get();
    //     if ($data == null) {
    //         foreach ($data as $data) {
    //             $date = $data->created_at->toDateString();
    //             $date = $date == Carbon::now()->toDateString();
    //         }
    //         if ($date == false) {
    //             $data = new Time();
    //             $data->checkin = Carbon::now()->toTimeString();
    //             $data->user = Auth::user()->id;
    //             $data->name = Auth::user()->username;
    //             $data->save();
    //             return redirect()->back();
    //         } else {
    //             $data = Time::find($id);
    //             $data->checkin = Carbon::now()->toTimeString();
    //             $data->user = Auth::user()->id;
    //             $data->name = Auth::user()->username;
    //             $data->update();
    //             return redirect()->back();
    //         }
    //     } else {
    //         $data = Time::find($id);
    //         $data->checkin = Carbon::now()->toTimeString();
    //         $data->user = Auth::user()->id;
    //         $data->name = Auth::user()->username;
    //         $data->update();
    //         return redirect()->back();
    //     }
    // }
    // public function checkout(Request $request, $id)
    // {
    //     $data = Time::find($id);
    //     $data->checkout = Carbon::now()->toTimeString();
    //     $data->save();
    //     $dataa = DB::Table('times')->where('id', '=', $id)->selectRaw('time(sum(TIMEDIFF( checkout, checkin ))) as total')->first();
    //     $data = Time::find($id);
    //     $data->totaltime =Carbon::parse($dataa->total)->format('H:i:s');
    //     $data->save();
    //     return redirect()->back();
    // }
     // public function totaltime(Request $request, $id)
    // {
    //     $userId = Auth::user()->id;
    //     $data = Time::where('user', $userId)->whereDate('created_at', Carbon::today())->first();
    //     $checkin = $data->checkin;
    //     $checkout = $data->checkout;
    //     $data = $checkin - $checkout;
    //     return redirect()->back();
    // }
}
