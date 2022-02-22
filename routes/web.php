<?php

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

Route::get('/halftimerental', function () {
    return view('homepage');
});

Route::get('halftimerental/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('halftimerental/contact',[App\Http\Controllers\HelpCenterController::class,'postHelpCenter'])->name('Oncontact');
Route::get('halftimerental',[App\Http\Controllers\HomeController::class,'homepage'])->name('homepage');
Route::get('halftimerental/login',[App\Http\Controllers\LoginController::class,'login'])->name('showLogin');
Route::get('halftimerental/register',[App\Http\Controllers\SignupController::class,'register'])->name('showRegister');
Route::post('halftimerental',[App\Http\Controllers\HomeController::class,'homeSearch'])->name('homeSearch');
//Admin Routes

Route::get('halftimerental/login/admin',[App\Http\Controllers\LoginController::class,'loginAdmin'])->name('showAdminLogin');
    
Route::middleware(['adminlogin'])->group(function(){
Route::get('halftimerental/admin/dashboard',[App\Http\Controllers\HomeController::class,'adminDashboard'])->name('adminDashboard');
Route::get('halftimerental/admin/dashboard/memberlisting',[App\Http\Controllers\MemberController::class,'viewML'])->name('viewML');
Route::get('halftimerental/admin/dashboard/orderlisting',[App\Http\Controllers\OrderController::class,'viewOL'])->name('viewOL');
Route::get('halftimerental/admin/dashboard/vehiclelisting',[App\Http\Controllers\VehicleController::class,'viewVL'])->name('viewVL');
Route::get('halftimerental/admin/dashboard/logout',[App\Http\Controllers\LoginController::class,'logoutAdmin'])->name('signoutAdmin');
});
//User Routes

Route::middleware(['memberlogin'])->group(function(){

    // Route::get('halftimerental/user/dashboard',[App\Http\Controllers\HomeController::class,'userDashboard'])->name('userDashboard');
    // Route::get('halftimerental/user/dashboard/rent/view/{id}',[App\Http\Controllers\HomeController::class,'userDashboardFVD'])->name('userDashboardFVD');
    Route::get('halftimerental/user/dashboard/',[App\Http\Controllers\HomeController::class,'userDashboard'])->name('userDashboard');
    Route::get('halftimerental/user/dashboard/search',[App\Http\Controllers\OrderController::class,'rentFilterSearch'])->name('rentSearch');
    Route::get('halftimerental/user/dashboard/rent/history',[App\Http\Controllers\OrderController::class,'rentHistory'])->name('rentHistory');
    Route::get('halftimerental/user/dashboard/profile',[App\Http\Controllers\ProfileController::class,'profile'])->name('profile');
    Route::get('halftimerental/user/dashboard/profile/edit',[App\Http\Controllers\ProfileController::class,'profileEdit'])->name('profileEdit');
    Route::post('halftimerental/user/dashboard/profile/update',[App\Http\Controllers\ProfileController::class,'profileUpdate'])->name('profileUpdate');
    Route::get('halftimerental/user/dashboard/logout',[App\Http\Controllers\LoginController::class,'logoutUser'])->name('signoutUser');
    Route::get('halftimerental/user/dashboard/vehicle/detail/{id}',[App\Http\Controllers\OrderController::class,'vehicleDetail'])->name('vehicleDetails');
    Route::post('halftimerental/user/dashboard/vehicle/rent',[App\Http\Controllers\OrderController::class,'vehicleRent'])->name('vehicleRent');
    
});
