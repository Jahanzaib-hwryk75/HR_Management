<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use File;

class RolesController extends Controller
{
    public function useradd(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required|unique:users',
            'contact' => 'required',
            'company' => 'required',
            'country' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
        $data = $request->except('_token');
        $imageName = time() . '.' . $request->photo->extension();
        $data['photo'] = $imageName;
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        $request->photo->move(public_path('profile'), $imageName);
        return redirect()->back()->with('message', 'Data Inserted');
    }
    public function useredit(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'contact' => 'required',
            'company' => 'required',
            'country' => 'required',
            'role' => 'required',
        ]);
        $data = $request->except('_token', 'email');
        if (isset($request->photo) && !empty($request->photo)) {
            $imageName = time() . '.' . $request->photo->extension();
            $data['photo'] = $imageName;
            $request->photo->move(public_path('profile'), $imageName);
        }
        User::where("id", $id)->update($data);
 
        return redirect()->back()->with('message', 'Data Inserted');
    }
    public function userdlt($id)
    {
        $data = User::findOrFail($id);
        $user = $data->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
    public function rolesadd(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
        ]);
        Role::create($request->except('_token'));
        return redirect()->back()->with('message', 'Data Inserted');
    }
    public function rolesedit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:roles',
        ]);
        Role::where("id", $id)->update($request->except('_token'));
        return redirect()->back()->with('message', 'Data Inserted');
    }
    public function rolesdlt($id)
    {
        $data = Role::findOrFail($id);
        $user = $data->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
