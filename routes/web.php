<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\IsAdminMiddleware;
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

Route::get('/dashboard/team/{id}', [DashboardController::class, 'getTeamPage'])->name('getTeamPage');

Route::get('/dashboard/leaderProfile', [DashboardController::class, 'getLeaderProfilePage'])->name('getLeaderProfilePage');

Route::get('/dashboard/profile/{id}', [DashboardController::class, 'getProfilePage'])->name('getProfilePage');

Route::get('/dashboard/team-add', [DashboardController::class, 'getTeamAddPage'])->name('getTeamAddPage');

Route::get('/dashboard/payment', [DashboardController::class, 'getPaymentPage'])->name('getPaymentPage');

// Registration Route
Route::get('/registration', [Controller::class, 'getRegistrationPage'])->name('getRegistrationPage');

// Email Route
Route::post('/send-email', [MailController::class, 'send'])->name('sendEmail');

Auth::routes();

Route::get('/success', [App\Http\Controllers\HomeController::class, 'index'])->name('success');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/payment/{id}', [PaymentController::class, 'addPayment'])->name('addPayment');

Route::post('/createMember', [MemberController::class, 'createMember'])->name('createMember');

Route::group(['middleware' => IsAdminMiddleware::class], function(){
    Route::get('/admin-dashboard', [DashboardController::class,'getTeamData'])->name('getTeamData');

    Route::get('/admin-dashboard/teamdata/{id}', [DashboardController::class,'getData'])->name('getData');

    Route::delete('/deleteTeam', [DashboardController::class, 'deleteTeam'])->name('deleteTeam');

    Route::get('/admin-dashboard/teamdata/leaderData/{id}', [DashboardController::class, 'getLeaderData'])->name('getLeaderData');

    Route::get('/admin-dashboard/teamdata/memberData/{id}', [DashboardController::class, 'getMemberData'])->name('getMemberData');

    Route::patch('/admin-dashboard/teamdata/updateLeaderData/{id}', [DashboardController::class, 'updateLeaderData'])->name('updateLeaderData');

    Route::patch('/admin-dashboard/teamdata/updateMemberData/{id}', [DashboardController::class, 'updateMemberData'])->name('updateMemberData');

    Route::get('/admin-dashboard/payment', [DashboardController::class, 'getTeamPayment'])->name('getTeamPayment');

    Route::post('/admin-dashboard/acceptpayment', [PaymentController::class, 'acceptPayment'])->name('acceptPayment');

    Route::post('/admin-dashboard/rejectpayment', [PaymentController::class, 'rejectPayment'])->name('rejectPayment');
});

