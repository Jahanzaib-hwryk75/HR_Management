<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Project;
use App\Models\salary;
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
        // $userId = Auth::user()->id;
        //$data = Salarymonth::where('user', $userId)->get();
        $user = new Salarymonth();
        $user->salarymonth = $request->salarymonth;
        $user->save();
        return redirect()->back()->with('message', 'Salary Generated Successfully');
    }
    public function deletemonth($id)
    {
        $deletemonth = Salarymonth::find($id);
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
        $createsetupsalary = salary::with('getEmployee')->get();
        return view('payroll.createsetup', compact('createsetupsalary'));
    }
    public function managesalarysetup()
    {
        $managesalarysetup = salary::with('getEmployee')->get();
        // $managesalarysetup = employee::all();
        return view('payroll.managesalarysetup', compact('managesalarysetup'));
    }
    public function editmanagesalary($id){
        $editsalary=salary::find($id);
        $employeesget=employee::all();
        return view('payroll.editmanagesalarysetup',compact('editsalary','employeesget'));
    }
    

    public function updatemanagesalary(Request $request,$id){
        $updatemanagesalary = salary::find($id);
       
        $updatemanagesalary->salarytype = $request->salarytype;

        $totalAdd = $request->health + $request->houserent + $request->bonus + $request->newaddition;

        $totalDeduct =  $request->pf - $request->newdeduction - $request->tax;

        $updatemanagesalary->basic = $request->basic + $totalAdd;
        $updatemanagesalary->basic = $request->basic - $totalDeduct;

        $updatemanagesalary->pf = $request->pf;
        $updatemanagesalary->health = $request->health;
        $updatemanagesalary->houserent = $request->houserent;
        $updatemanagesalary->bonus = $request->bonus;
        $updatemanagesalary->newaddition = $request->newaddition;
        $updatemanagesalary->newdeduction = $request->newdeduction;
        $updatemanagesalary->tax = $request->tax;
    
        $updatemanagesalary->grosssalary = $updatemanagesalary->basic;
        $updatemanagesalary->update();
        return redirect('/admin/managesalarysetup');
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
        if ($deletemanagesalarybenefits) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
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
    public function savesalary(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'salarytype' => 'required',
            'basic' => 'required',
            'health' => 'required',
            'houserent' => 'required',
            'bonus' => 'required',
            'newaddition' => 'required',
            'pf' => 'required',
            'newdeduction' => 'required',
            'tax' => 'required',

        ]);
        $savesalary = new salary();
        $savesalary->employee_id = $request->employee_id;
        $savesalary->salarytype = $request->salarytype;

        $totalAdd = $request->health + $request->houserent + $request->bonus + $request->newaddition;

        $totalDeduct =  $request->pf - $request->newdeduction - $request->tax;

        $savesalary->basic = $request->basic + $totalAdd;
        $savesalary->basic = $request->basic - $totalDeduct;

        $savesalary->pf = $request->pf;
        $savesalary->health = $request->health;
        $savesalary->houserent = $request->houserent;
        $savesalary->bonus = $request->bonus;
        $savesalary->newaddition = $request->newaddition;
        $savesalary->newdeduction = $request->newdeduction;
        $savesalary->tax = $request->tax;
        $savesalary->grosssalary = $savesalary->basic;
        $savesalary->save();
        return redirect()->back();
    }
}
