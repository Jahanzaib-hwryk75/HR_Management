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
    public function requestsends(Request $request){
        
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
    public function description($id){
        
        $data=leave::find($id);
        
        return view('leavemanagement.description',compact('data'));
    }
    public function leaveedit($id){
        $leaveedit=leave::find($id);
        // return view('',compact('leaveedit'));
    }
    public function leaveupdate(Request $request, $id){
       $leavestatus=leave::find($id);
       $leavestatus->status='Accept';
       return redirect()->back();
    }
    public function mangeapplication(){
        $user = leave::all();
        return view('/leavemanagement.mangeapplication', compact('user'));
    }
    public function deleteapplication($id){
       
        $user=leave::find($id);
        $user->delete();
        if ($user) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
        // return redirect()->back();
    }
    public function editapplication($id){
        $user=leave::find($id);
        return view('/leavemanagement.editapplications',compact('user'));
    }
   public function updateapplications(Request $request, $id){
       $user=leave::find($id);
       $user->approvedstartdate=$request->approvedstartdate;
       $user->approvedenddate=$request->approvedenddate;
       $user->status=$request->status;
       $user->update();
        // $user = leave::where('id', $id)->update($request->except('_token'));
       return redirect('/admin/mangeapplication');
   }
   public function addemployee(){
    $breadcrumbs = [
        ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Wizard"]
    ];
    return view('/employee.addemployee', [
        'breadcrumbs' => $breadcrumbs
    ]);
   }
   
}
