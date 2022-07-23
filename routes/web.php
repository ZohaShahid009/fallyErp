<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminFAQController;
use App\Models\Plan;

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
// new zoI RFFF
Auth::routes();




// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('single-charge', [HomeController::class, 'singleCharge'])->name('single.charge');
Route::get('plans/create', [SubscriptionController::class, 'showPlanForm'])->name('plans.create');
Route::post('plans/store', [SubscriptionController::class, 'savePlan'])->name('plans.store');


Route::get('plans', [SubscriptionController::class, 'allPlans'])->name('plans.all');
Route::get('plans/checkout/{planId}', [SubscriptionController::class, 'checkout'])->name('plans.checkout');
Route::post('plans/process', [SubscriptionController::class, 'processPlan'])->name('plan.process');

Route::get('subscriptions/all', [SubscriptionController::class, 'allSubscriptions'])->name('subscriptions.all');

// RFF END

// Staff Routes
Route::get('add-staff-form', function () {
    return view('admin.pages.staff.create');
});
Route::get('staff-list', [AdminController::class, 'stafflist']);
Route::post('add-staff', [AdminController::class, 'addstaff']);
Route::get('edit-staff/{id}', [AdminController::class, 'editstaff']);
Route::delete('staffs/{id}', [AdminController::class, 'deletestaff'])->name('delete-staff');
Route::post('update-staff/{id}', [AdminController::class, 'updatestaff']);
Route::post('staff/detail', [AdminController::class, 'staff_detail'])->name('staff.detail');

// Super Admin Crud By Aqeel Start
Route::get('add-superadmin-form', function () {
    return view('admin.pages.superadmin.create');
});
Route::get('superadmin-list', [AdminController::class, 'superadminlist']);
Route::post('add-superadmin', [AdminController::class, 'addsuperadmin']);
Route::get('edit-superadmin/{id}', [AdminController::class, 'editsuperadmin']);
Route::delete('superadmins/{id}', [AdminController::class, 'deletesuperadmin'])->name('delete-superadmin');
Route::post('update-superadmin/{id}', [AdminController::class, 'updatesuperadmin']);
Route::post('superadmin/detail', [AdminController::class, 'superadmin_detail'])->name('superadmin.detail');
// Super Admin Crud by Aqeel End

Route::match(['get', 'post'], 'add/categories', [CategoriesController::class, 'addCategories']);
Route::get('categories/list', [CategoriesController::class, 'categorieslist']);
Route::match(['get', 'post'], 'edit/categories/{id}', [CategoriesController::class, 'editCategories']);
Route::delete('categories/{id}', [CategoriesController::class, 'deletecategories'])->name('delete/categories');


Route::match(['get', 'post'], 'add/sub-categories', [CategoriesController::class, 'addsubCategories']);
Route::get('sub-categories/list', [CategoriesController::class, 'subcategorieslist']);
Route::match(['get', 'post'], 'edit/sub-categories/{id}', [CategoriesController::class, 'editsubCategories']);
Route::delete('sub-categories/{id}', [CategoriesController::class, 'deletesubcategories'])->name('delete/sub-categories');



// route of admin FAQ
Route::get('add-FAQ-form', function () {
    return view('admin.pages.admin_FAQ.add');
});
Route::get('admin-list', [AdminFAQController::class, 'adminlist']);
Route::post('add-admin', [AdminFAQController::class, 'addadmin']);
Route::get('edit-admin/{id}', [AdminFAQController::class, 'editadmin']);
Route::delete('admins/{id}', [AdminFAQController::class, 'deleteadmin'])->name('delete-admin');
Route::post('/updateadmin/{id}', [AdminFAQController::class, 'updateadmindata']);
Route::post('admin/detail', [AdminFAQController::class, 'admin_detail'])->name('admin.detail');
// END OF // route of admin FAQ



// products
Route::get('add-product-form', function () {
    return view('admin.pages.product.create');
});
Route::get('product-list', [ProductController::class, 'productlist']);
Route::post('add-product', [ProductController::class, 'addproduct']);
Route::get('edit-product/{id}', [ProductController::class, 'editproduct']);
Route::delete('product/{id}', [ProductController::class, 'deleteproduct'])->name('delete-product');
Route::post('/updateproduct/{id}', [ProductController::class, 'updateproduct']);
Route::post('product/detail', [ProductController::class, 'product_detail'])->name('product.detail');
// end products
