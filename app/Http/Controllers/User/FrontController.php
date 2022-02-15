<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    // User List Page
    public function user_list()
    {

        Auth::user()->assignRole('admin');
        $pageConfigs = ['pageHeader' => false];
        $user = User::all();
        return view('/content/apps/user/app-user-list', compact('pageConfigs', 'user'));
    }
    // User roles Page
    public function roles_list()
    {
        $roles = Role::all();
        return view('/content/apps/user/roles', compact('roles'));
    }
}
