<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function salarygenerate(){
        return view('/payroll.salarygenerate');
    }
    public function manageemployeesalery(){
        return view('/payroll.manageemployeesalery');
    }
    public function paymentform(){
        return view('/payroll.payment');
    }
   public function salarytypesetup(){
       return view('payroll.salarytypesetup');
   }
   public function addsalarybenfit(){
       return view('payroll.addsalarybenfit');
   }
   public function managesalarybenefits(){
    return view('payroll.managesalarybenefits');
}
public function createsetup(){
    return view('payroll.createsetup');
}
public function managesalarysetup(){
    return view('payroll.managesalarysetup');
}
public function salarysetup(){
    return view('payroll.salarysetup');
}
}
