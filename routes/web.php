<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MerchantController , StaffController , ParentController , SchoolController , RegisterController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


// Merchant Controllers

Route::get('/merchant', [MerchantController::class, 'index'])->name('formmerchants');
Route::get('/tablemerchant', [MerchantController::class, 'tableM'])->name('tablemerchant');
Route::post('api/find-cities', [MerchantController::class, 'findCities']);
Route::post('api/find-schools', [MerchantController::class, 'findSchools']);
//-------------------------------------------------------------------------------------------------------------------------//


// Staff Controllers

Route::get('/staff', [StaffController::class, 'index'])->name('formstaffs');
Route::get('/tablestaff', [StaffController::class, 'tableS'])->name('tablestaff');
Route::post('api/find-cities', [StaffController::class, 'findCities']);
Route::post('api/find-schools', [StaffController::class, 'findSchools']);
//-------------------------------------------------------------------------------------------------------------------------//


// Parent Controllers

Route::get('/parent', [ParentController::class, 'index'])->name('formparents');
Route::get('/tableparent', [ParentController::class, 'tableP'])->name('tableparent');
Route::get('/editparent' ,[ParentController::class, 'edit'])->name('editparent');
Route::post('/updateparent', [ParentController::class, 'update'])->name('updateparent');
Route::post('/deleteparent', [ParentController::class, 'destroy'])->name('deleteparent');
Route::post('/save', [ParentController::class, 'store'])->name('saveparents');
//-------------------------------------------------------------------------------------------------------------------------//


// School Controllers

Route::get('/school', [SchoolController::class, 'index'])->name('tableschool');
Route::get('/tableP', [SchoolController::class, 'dataP'])->name('tableP');
Route::get('/tableM', [SchoolController::class, 'dataM'])->name('tableM');
Route::get('/tableS', [SchoolController::class, 'dataS'])->name('tableS');
Route::get('/chart', [SchoolController::class, 'dashboard'])->name('dashboard');
Route::post('/search', [SchoolController::class, 'search'])->name('search');
//-------------------------------------------------------------------------------------------------------------------------//


// Register Controllers

Route::get('dashboard', [RegisterController::class, 'dashboard']);
Route::get('login', [RegisterController::class, 'index'])->name('login');
Route::post('custom-login', [RegisterController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [RegisterController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [RegisterController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [RegisterController::class, 'signOut'])->name('signout');
//-------------------------------------------------------------------------------------------------------------------------//



