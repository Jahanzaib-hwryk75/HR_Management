<?php

namespace App\Http\Controllers;

use App\Models\addleavetype;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\leave;
use App\Models\country;
use App\Models\duty;
use App\Models\position;
use App\Models\employee;

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
   $user=country::all();
   $data=duty::all();
   $position=position::all();
    return view('/employee.addemployee',compact('user','data','position'));
       
   }
  
   public function addposition(){
    $position=position::all();
       return view('/employee.addposition',compact('position'));
   }
   public function adddutytype(){
    $data=duty::all();
       return view('/employee.adddutytype',compact('data'));
   }
   public function addcountry(){
    $user=country::all();
       return view('/employee.addcountry',compact('user'));
   }
   public function savecountry(Request $request){
       $request->validate([
           'couuntryname'=>'required'
       ]);
       $savecountry=new country();
       {
            $savecountry->couuntryname=$request->couuntryname;
            $savecountry->save();
            return redirect()->back();
       }
       
      
   }
   public function editcountry($id){
       $editcountry=country::find($id);
       return view('/employee.updatecountry',compact('editcountry'));
   }
   public function updatecountry(Request $request,$id){
       $updatecountry=country::find($id);
       $updatecountry->couuntryname=$request->couuntryname;
       $updatecountry->update();
       return redirect('/admin/addcountry');
   }
   public function deletecountry($id){
       $deletecountry=country::find($id);
       $deletecountry->delete();
       return redirect('/admin/addcountry');
   }
   public function savedutytype(Request $request){
       $request->validate([
           'dutytime'=>'required'
       ]);
       $savedutytype=new duty();
       $savedutytype->dutytime=$request->dutytime;
       $savedutytype->save();
       return redirect()->back();
          
    }
    public function deletedutytime($id){
        $deletedutytime=duty::find($id);
        $deletedutytime->delete();
        return redirect('/admin/adddutytype');
    }
    public function editdutytime($id){
        $editdutytime=duty::find($id);
        return view('/employee.updatedutytype',compact('editdutytime'));
    }
    public function updatedutytime(Request $request,$id){
        $updatedutytime=duty::find($id);
        $updatedutytime->dutytime=$request->dutytime;
        $updatedutytime->update();
        return redirect('/admin/adddutytype');
    }
public function saveposition(Request $request){
    $request->validate([
        'positionname'=>'required'
    ]);
    $saveposition=new position();
    $saveposition->positionname=$request->positionname;
    $saveposition->save();
    return redirect()->back();
    }
    public function deleteposition($id){
        $delposition=position::find($id);
        $delposition->delete();
        return redirect()->back()->with('message','Data Deleted');
    }
    public function editposition($id){
        $editposition=position::find($id);
        return view('employee.updatepositionpage',compact('editposition'));
    }
    public function updateposition(Request $request, $id){
        $updateposition=position::find($id);
        $updateposition->positionname=$request->positionname;
       $updateposition->update();
       return redirect('/admin/addposition');
    }
    public function saveemployee(Request $request){
     
        // $request->validate([
        // 'firstname'=>'required',
        // 'lastname'=>'required',
        // 'email'=>'required|email|unique:employees',
        // 'phonenumber'=>'required',
        // 'alternativephone'=>'required',
        // 'selectcountry'=>'required',
        // 'city'=>'required',
        // 'zipcode'=>'required',
        // 'division'=>'required',
        // 'positionname'=>'required',
        // 'dutytype'=>'required',
        // 'hiredate'=>'required',
        // 'rehiredate'=>'required',
        // 'terminationdate'=>'required',
        // 'terminationreason'=>'required',
        // 'voluntarytermination'=>'required',
        // 'ratetype'=>'required',
        // 'rate'=>'required',
        // 'payfrequency'=>'required',
        // 'payfrequencytext'=>'required',
        // 'homedepartment'=>'required',
        // 'homedepartmenttext'=>'required',
        // 'dateofbirth'=>'required',
        // 'gender'=>'required',
        // 'maritalstatus'=>'required',
        // 'workinstate'=>'required',
        // 'lineinstate'=>'required',
        // 'citizenship'=>'required',
        // 'pictureupload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'homeemail'=>'required|email|unique:employees',
        // 'homephone'=>'required',
        // 'businessphone'=>'required',
        // 'cellphone'=>'required',
        // 'emergencycontact'=>'required',
        // 'emergencyhome'=>'required',
        // 'emergencycontactrelation'=>'required',
        // 'alteremergencycontact'=>'required',
        // 'alteremergencyphone'=>'required',
        // 'emails'=>'required|email|unique:employees',
        // 'password'=>'required|min:4'
        // ]);
        $ImageName =time().'.'.$request->pictureupload->extension();
        $saveemployee=new employee();
        $saveemployee->firstname=$request->firstname;
        $saveemployee->lastname=$request->lastname;
        $saveemployee->email=$request->email;
        $saveemployee->phonenumber=$request->phonenumber;
        $saveemployee->alternativephone=$request->alternativephone;
        $saveemployee->selectcountry=$request->selectcountry;
        $saveemployee->city=$request->city;
        $saveemployee->zipcode=$request->zipcode;
        $saveemployee->division=$request->division;
        $saveemployee->positionname=$request->positionname;
        $saveemployee->dutytype=$request->dutytype;
        $saveemployee->hiredate=$request->hiredate;
        $saveemployee->terminationdate=$request->terminationdate;
        $saveemployee->terminationreason=$request->terminationreason;
        $saveemployee->voluntarytermination=$request->voluntarytermination;
        $saveemployee->rehiredate=$request->rehiredate;
        $saveemployee->ratetype=$request->ratetype;
        $saveemployee->rate=$request->rate;
        $saveemployee->payfrequency=$request->payfrequency;
        $saveemployee->payfrequencytext=$request->payfrequencytext;
        $saveemployee->homedepartment=$request->homedepartment;
        $saveemployee->homedepartmenttext=$request->homedepartmenttext;
        $saveemployee->dateofbirth=$request->dateofbirth;
        $saveemployee->gender=$request->gender;
        $saveemployee->maritalstatus=$request->maritalstatus;
        $saveemployee->workinstate=$request->workinstate;
        $saveemployee->lineinstate=$request->lineinstate;
        $saveemployee->citizenship=$request->citizenship;
        $saveemployee->pictureupload = $ImageName;
        $saveemployee->homeemail=$request->homeemail;
        $saveemployee->homephone=$request->homephone;
        $saveemployee->businessphone=$request->businessphone;
        $saveemployee->cellphone=$request->cellphone;
        $saveemployee->emergencycontact=$request->emergencycontact;
        $saveemployee->emergencyhome=$request->emergencyhome;
        $saveemployee->emergencycontactrelation=$request->emergencycontactrelation;
        $saveemployee->alteremergencycontact=$request->alteremergencycontact;
        $saveemployee->alteremergencyphone=$request->alteremergencyphone;
        $saveemployee->emails=$request->emails;
        $saveemployee->password=$request->password;
        $saveemployee->save();
        $request->pictureupload->move(public_path('picture'), $ImageName);
        return redirect()->back();
    }
   
}
