<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployController extends Controller
{
    public function leave(){
        $user = User::all();
        return view('/leavemanagement/employestatus',compact('user'));
    }
}
