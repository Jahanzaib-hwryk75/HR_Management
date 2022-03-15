<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\salarybenfits;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function salarygenerate()
    {
        return view('/payroll.salarygenerate');
    }
    public function manageemployeesalery()
    {
        return view('/payroll.manageemployeesalery');
    }
    public function paymentform()
    {
        return view('/payroll.payment');
    }
    public function salarytypesetup()
    {
        $salarytypesetup=salarybenfits::all();
        return view('payroll.salarytypesetup',compact('salarytypesetup'));
    }
    public function addsalarybenfit()
    {
        return view('payroll.addsalarybenfit');
    }
    public function managesalarybenefits()
    {
        $managesalarybenefits=salarybenfits::all();
        return view('payroll.managesalarybenefits',compact('managesalarybenefits'));
    }
    public function createsetup()
    {
        $createsetupsalary=employee::all();
        return view('payroll.createsetup',compact('createsetupsalary'));
        return view('payroll.createsetup');
    }
    public function managesalarysetup()
    {
        return view('payroll.managesalarysetup');
    }
    public function salarysetup()
    {
        return view('payroll.salarysetup');
    }
    public function savesalarybenfit(Request $request){
        $request->validate([
            'salarybenfit'=>'required',
            'basicSelect'=>'required',
        ]);
        $savesalarybenfit=new salarybenfits();
        $savesalarybenfit->salarybenfit=$request->salarybenfit;
        $savesalarybenfit->basicSelect=$request->basicSelect;
        $savesalarybenfit->save();
        return redirect()->back();
    }
    public function deletemanagesalarybenefits($id){
        $deletemanagesalarybenefits=salarybenfits::find($id);
        $deletemanagesalarybenefits->delete();
        return redirect()->back();
    }
    public function editmanagesalarybenefits($id){
        $editmanagesalarybenefits=salarybenfits::find($id);
        return view('/payroll.updatemanagesalarybenefits',compact('editmanagesalarybenefits'));
    }
    public function updatemanagesalarybenefits(Request $request,$id){
        $request->validate([
            'salarybenfit'=>'required',
            'basicSelect'=>'required',
        ]);
       $updatemanagesalarybenefits=salarybenfits::find($id);
        $updatemanagesalarybenefits->salarybenfit=$request->salarybenfit;
        $updatemanagesalarybenefits->basicSelect=$request->basicSelect;
        $updatemanagesalarybenefits->update();
        return redirect('admin/managesalarybenefits');
    }
   
}
