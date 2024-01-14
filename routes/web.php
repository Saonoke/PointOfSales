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

// Authentication routes
Route::group(['middleware' => 'isGuest'], function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
    Route::post('/login', [AuthenticationController::class, 'doLogin']);
});

Route::get('/logout', [AuthenticationController::class, 'doLogout'])->middleware('isMember')->name('logout');


// Admin Dashboard routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('isMember', 'userAccess:admin')->name('admin.dashboard');
});

// Cashier Dashboard routes
Route::group(['prefix' => 'cashier'], function () {
    Route::get('/dashboard', [CashierDashboardController::class, 'index'])->middleware('isMember', 'userAccess:cashier')->name('cashier.dashboard');
});


// Route::group(['prefix' => 'admin', 'middleware' => 'isMember', 'userAccess:admin'], function () {
//     Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
// });

// Route::group(['prefix' => 'cashier', 'middleware' => 'isMember', 'userAccess:cashier'], function () {
//     Route::get('/dashboard', [CashierDashboardController::class, 'index'])->name('cashier.dashboard');
// });

