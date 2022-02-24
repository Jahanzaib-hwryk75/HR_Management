<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\User\RolesController;
use App\Http\Controllers\User\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\timelineController;

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
    Route::get('/timeline', [timelineController::class, 'timeline']);
    Route::get('/clockin', [timelineController::class, 'clockin']);
    Route::get('/clockout', [timelineController::class, 'clockout']);
});
});


// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
Route::get('convert-pdf-to-image', [ImageController::class, 'index'])->name('form');