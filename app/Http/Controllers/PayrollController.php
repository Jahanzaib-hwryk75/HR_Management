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
}
