<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Time;

class timelineController extends Controller
{
    function timeline(){
        $data=Time::all();
        return  view('timeline.timer',compact('data'));
    }
    function clockin(){
        $data = new Time();
        $data->checkin = Carbon::now();
        $data->save();
        return redirect('/timeline.timer')->back()-with('message','Project Started');
    }
    function clockout(){
        $data = new Time();
        $data->checkout = Carbon::now();
        $data->save();
        return redirect('/timeline.timer')->back()-with('message','Project is not Started');
    }
    
}
