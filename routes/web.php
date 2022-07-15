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


Route::get('/', function () {
    return view('admin.pages.dashboard.dashboard');
});

// Company Routes
Route::get('company-list', [AdminController::class, 'companylist']);
Route::get('add-company-form', function () {
    return view('admin.pages.company.create');
});
Route::post('add-company', [AdminController::class, 'addcompany']);
Route::post('update-company/{id}', [AdminController::class, 'updateCompany']);
Route::post('delete-company/{id}', [AdminController::class, 'deleteCompany']);
Route::get('show-company/{id}', [AdminController::class, 'showCompany']);
Route::get('edit-company/{id}', [AdminController::class, 'editCompany']);
// End Company routes
