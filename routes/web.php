<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CashierDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/login', 'login')->middleware('user');
    Route::post('/login', 'doLogin')->middleware('user');
    Route::get('/logout', 'doLogout');
});

Route::controller(AdminDashboardController::class)->group(function () {
    Route::get('/adminDashboard', 'index')->middleware('userAccess:admin');
    
});
Route::controller(CashierDashboardController::class)->group(function () {
    Route::get('/cashierDashboard', 'index')->middleware('userAccess:kasir');
    
});

