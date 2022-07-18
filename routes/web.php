<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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


Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware('isLogged');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'login'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'submit_registration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signout'])->name('signout');

Route::get('/', [AuthController::class, 'dashboard'])->middleware('isLogged');

// Route::get('/', function () {
//     return view('admin.pages.dashboard.dashboard');
// });

// Company Routes
Route::get('company-list', [AdminController::class, 'companylist']);
Route::get('add-company-form', function () {
    return view('admin.pages.company.create');
});
Route::post('add-company', [AdminController::class, 'addcompany']);
Route::post('update-company/{id}', [AdminController::class, 'updateCompany']);
Route::get('show-company/{id}', [AdminController::class, 'showCompany']);
Route::get('edit-company/{id}', [AdminController::class, 'editCompany']);
Route::delete('companies/{id}', [AdminController::class, 'delete'])->name('delete-company');
Route::post('company/detail', [AdminController::class, 'company_detail'])->name('company.detail');


// End Company routes

// Staff Routes
Route::get('add-staff-form', function () {
    return view('admin.pages.staff.create');
});
Route::get('staff-list', [AdminController::class, 'stafflist']);
Route::post('add-staff', [AdminController::class, 'addstaff']);
Route::get('edit-staff/{id}', [AdminController::class, 'editstaff']);
Route::delete('staffs/{id}', [AdminController::class, 'deletestaff'])->name('delete-staff');
Route::post('update-staff/{id}', [AdminController::class, 'updatestaff']);


