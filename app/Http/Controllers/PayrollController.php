<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Project;
use App\Models\salarybenfits;
use Illuminate\Http\Request;
use App\Models\Salarymonth;
use Illuminate\Support\Carbon;

class PayrollController extends Controller
{
    public function salarygenerate()
    {
        $data = Salarymonth::all();

        return view('/payroll.salarygenerate', compact('data'));
    }
    public function salarygenerator(Request $request)
    {
        $request->validate([
            'salarymonth' => 'required'
        ]);
        $user = new Salarymonth();
        $user->salarymonth = $request->salarymonth;
        $user->save();
        return redirect()->back()->with('message', 'Salary Generated Successfully');
    }
    public function deletemonth($id){
        $deletemonth=Salarymonth::find($id);
        $deletemonth->delete();
        return redirect()->back();
    }
    public function manageemployeesalery()
    {

        $data = Project::with('getEmployee')->get();
        // dd($data);
        return view('/payroll.manageemployeesalery', compact('data'));
    }
    public function paymentform()
    {
        return view('/payroll.payment');
    }

    public function salarytypesetup()
    {
        $salarytypesetup = salarybenfits::all();
        return view('payroll.salarytypesetup', compact('salarytypesetup'));
    }
    public function addsalarybenfit()
    {
        return view('payroll.addsalarybenfit');
    }
    public function managesalarybenefits()
    {
        $managesalarybenefits = salarybenfits::all();
        return view('payroll.managesalarybenefits', compact('managesalarybenefits'));
    }
    public function createsetup()
    {
        $createsetupsalary = employee::all();
        return view('payroll.createsetup', compact('createsetupsalary'));
        return view('payroll.createsetup');
        $createsetupsalary=employee::all();
        return view('payroll.createsetup',compact('createsetupsalary'));
      
    }
    public function managesalarysetup()
    {
        $managesalarysetup=employee::all();
        return view('payroll.managesalarysetup',compact('managesalarysetup') );
    }
    public function salarysetup()
    {
        $salarysetup = employee::all();
        return view('payroll.salarysetup', compact('salarysetup'));
    }
    public function savesalarybenfit(Request $request)
    {
        $request->validate([
            'salarybenfit' => 'required',
            'basicSelect' => 'required',
        ]);
        $savesalarybenfit = new salarybenfits();
        $savesalarybenfit->salarybenfit = $request->salarybenfit;
        $savesalarybenfit->basicSelect = $request->basicSelect;
        $savesalarybenfit->save();
        return redirect()->back();
    }
    public function deletemanagesalarybenefits($id)
    {
        $deletemanagesalarybenefits = salarybenfits::find($id);
        $deletemanagesalarybenefits->delete();
        return redirect()->back();
    }
    public function editmanagesalarybenefits($id)
    {
        $editmanagesalarybenefits = salarybenfits::find($id);
        return view('/payroll.updatemanagesalarybenefits', compact('editmanagesalarybenefits'));
    }
    public function updatemanagesalarybenefits(Request $request, $id)
    {
        $request->validate([
            'salarybenfit' => 'required',
            'basicSelect' => 'required',
        ]);
        $updatemanagesalarybenefits = salarybenfits::find($id);
        $updatemanagesalarybenefits->salarybenfit = $request->salarybenfit;
        $updatemanagesalarybenefits->basicSelect = $request->basicSelect;
        $updatemanagesalarybenefits->update();
        return redirect('/admin/managesalarybenefits');
    }
}
