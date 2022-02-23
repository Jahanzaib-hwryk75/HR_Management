<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $user = User::all();
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
}
