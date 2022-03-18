<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\User\RolesController;
use App\Http\Controllers\User\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\timelineController;
use App\Http\Controllers\ProjectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Login Page Route
Route::get('/', [AuthenticationController::class, 'login_cover'])->name('login');
Route::post('/signin', [AuthenticationController::class, 'login']);
///////middleware//////////////
Route::group(['middleware' => 'auth:web'], function () {
////////Admin Routes
Route::group(['prefix' => 'admin'], function () {
    
    Route::get('timepicker', [FormsController::class, 'date_time_picker'])->name('date_time_picker');
    Route::get('dashboard', [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce');
    Route::get('user/list', [FrontController::class, 'user_list'])->name('app-user-list');
    Route::get('adduser', [FormsController::class, 'adduser'])->name('form-useradd');
    Route::post('user/add', [RolesController::class, 'useradd'])->name('useradd');
    Route::get('edituser/{id}', [FormsController::class, 'edituser'])->name('form-useredit');
    Route::post('user/add/{id}', [RolesController::class, 'useredit'])->name('useredit');
    Route::post('user/delete/{id}', [RolesController::class, 'userdlt'])->name('usersdlt');
    Route::get('roles/list', [FrontController::class, 'roles_list'])->name('roles');
    Route::get('layout', [FormsController::class, 'layouts'])->name('form-layout');
    Route::post('roles/add', [RolesController::class, 'rolesadd'])->name('rolesadd');
    Route::get('edit/{id}', [FormsController::class, 'edit'])->name('form-edit');
    Route::any('roles/add/{id}', [RolesController::class, 'rolesedit'])->name('rolesedit');
    Route::post('roles/delete/{id}', [RolesController::class, 'rolesdlt'])->name('rolesadd');
    Route::post('/signout', [AuthenticationController::class, 'logout']);
    Route::get('/status', [AuthenticationController::class, 'status']);

    Route::get('/leave',[EmployController::class,'leave']);
    Route::get('/leaveform',[EmployController::class,'leaveform']);
    Route::get('/timeline', [timelineController::class, 'timeline']);
    Route::get('/clockin', [timelineController::class, 'clockin']);
    Route::get('/clockout', [timelineController::class, 'clockout']);

    // Leave Mangement
    Route::get('/leave',[EmployController::class,'leave']);
    Route::get('/requestleave',[EmployController::class,'requestleave']);
    Route::post('/requestsends',[EmployController::class,'requestsends']);
    Route::get('/description/{id}',[EmployController::class,'description']);
    Route::get('mangeapplication',[EmployController::class,'mangeapplication']);
    Route::get('/deleteapplication/{id}',[EmployController::class,'deleteapplication']);
    Route::get('/editapplication/{id}',[EmployController::class,'editapplication']);
    Route::post('/updateapplications/{id}',[EmployController::class,'updateapplications']);
    Route::get('/addemployee',[EmployController::class,'addemployee']);
    Route::get('/deleteposition/{id}',[EmployController::class,'deleteposition']);
    Route::get('/editposition/{id}',[EmployController::class,'editposition']);
    Route::post('/updateposition/{id}',[EmployController::class,'updateposition']);
  
    Route::get('/addposition',[EmployController::class,'addposition']);
    Route::get('/adddutytype',[EmployController::class,'adddutytype']);
    Route::get('/addcountry',[EmployController::class,'addcountry']);
    Route::post('/savecountry',[EmployController::class,'savecountry']);
    Route::post('/savedutytype',[EmployController::class,'savedutytype']);
    Route::post('/saveposition',[EmployController::class,'saveposition']);
    Route::post('/saveemployee',[EmployController::class,'saveemployee']);
    Route::get('/deletedutytime/{id}',[EmployController::class,'deletedutytime']);
    Route::get('/editdutytime/{id}',[EmployController::class,'editdutytime']);
    Route::post('/updatedutytime/{id}',[EmployController::class,'updatedutytime']);
    Route::get('/editcountry/{id}',[EmployController::class,'editcountry']);
    Route::post('/updatecountry/{id}',[EmployController::class,'updatecountry']);
    Route::get('/deletecountry/{id}',[EmployController::class,'deletecountry']);
    Route::get('/showemployee',[EmployController::class,'showemployee']);
    Route::get('/deleteemployee/{id}',[EmployController::class,'deleteemployee']);

    Route::get('/salarytypesetup',[PayrollController::class,'salarytypesetup']);
    Route::get('/addsalarybenfit',[PayrollController::class,'addsalarybenfit']);
    Route::get('/managesalarybenefits',[PayrollController::class,'managesalarybenefits']);
    Route::get('/createsetup',[PayrollController::class,'createsetup']);
    Route::get('/managesalarysetup',[PayrollController::class,'managesalarysetup']);
    Route::get('/salarysetup',[PayrollController::class,'salarysetup']);
    Route::post('/savesalarybenfit',[PayrollController::class,'savesalarybenfit']);
    Route::get('/deletemanagesalarybenefits/{id}',[PayrollController::class,'deletemanagesalarybenefits']);
    Route::get('/editmanagesalarybenefits/{id}',[PayrollController::class,'editmanagesalarybenefits']);
    Route::post('/updatemanagesalarybenefits/{id}',[PayrollController::class,'updatemanagesalarybenefits']);
    Route::get('file-import-export', [EmployController::class, 'fileImportExport']);
    Route::post('/file-import', [EmployController::class, 'fileImport']);
    Route::get('file-export', [EmployController::class, 'fileExport'])->name('file-export');
    Route::post('/savesalary',[PayrollController::class,'savesalary']);
   

  

   

    Route::get('/projectassign', [ProjectController::class, 'projectstable']);
    Route::get('/assign', [ProjectController::class, 'assign']);
    Route::post('/assign', [ProjectController::class, 'store']);
    Route::get('/addclient', [ProjectController::class, 'addclient']);
    Route::post('/clientsave', [ProjectController::class, 'clientsave']);
    Route::get('/clients', [ProjectController::class, 'clientstable']);
    Route::get('/checkin/{id}', [ProjectController::class, 'checkin']);
    Route::get('/checkout/{id}', [ProjectController::class, 'checkout']);
    Route::get('/timing', [ProjectController::class, 'timetable']);
    Route::post('/nametimesave', [ProjectController::class, 'nametimesave']);

    Route::get('/salarygenerate', [PayrollController::class, 'salarygenerate']);
    Route::get('/manageemployeesalery', [PayrollController::class, 'manageemployeesalery']);
    Route::get('/paymentform', [PayrollController::class, 'paymentform']);
    
});
});


// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
Route::get('convert-pdf-to-image', [ImageController::class, 'index'])->name('form');
