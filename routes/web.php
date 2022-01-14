<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
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

Route::get('/', [Controller::class, 'getHomePage'])->name('getHomePage');

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'getDashboardPage'])->name('getDashboardPage');

Route::get('/dashboard/team', [DashboardController::class, 'getTeamPage'])->name('getTeamPage');

Route::get('/dashboard/payment', [DashboardController::class, 'getPaymentPage'])->name('getPaymentPage');

// Registration Route
Route::get('/registration', [Controller::class, 'getRegistrationPage'])->name('getRegistrationPage');

// Email Route
Route::post('/send-email', [MailController::class, 'send'])->name('sendEmail');

Auth::routes();

Route::get('/success', [App\Http\Controllers\HomeController::class, 'index'])->name('success');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/payment/{id}', [PaymentController::class, 'addPayment'])->name('addPayment');
