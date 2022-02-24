<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\leave;

class EmployController extends Controller
{
    // public function leave(){
    //     $user = User::all();
    //     return view('/leavemanagement/leave',compact('user'));
    // }
    // public function leaveform()
    // {
    //     return view('leavemanagement.leaveform');
    // }
    public function leave()
    {
        $user = leave::all();
        return view('/leavemanagement.leave', compact('user'));
    }

    public function requestleave()
    {
        // $breadcrumbs = [
        //     ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Date & Time Picker"]
        // ];
        // return view('leavemanagement.requestleave', [
        //     'breadcrumbs' => $breadcrumbs
        // ]);
        return view('/leavemanagement.requestleave');
    }
    public function requestsend(Request $request){
        
        $request->validate([
            'name'=>'required',
            'rank'=>'required',
            'type'=>'required',
            'datestart'=>'required',
            'dateend'=>'required',
            'desc'=>'required'
        ]);
        $requestsend=new leave();
        $requestsend->name=$request->name;
        $requestsend->rank=$request->rank;
        $requestsend->type=$request->type;
        $requestsend->datestart=$request->datestart;
        $requestsend->dateend=$request->dateend;
        $requestsend->desc=$request->desc;
        $requestsend->save();
        return redirect()->back()->with('message','data save');

    }
   
}
