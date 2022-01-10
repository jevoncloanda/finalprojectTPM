<?php

use App\Http\Controllers\Controller;
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

Route::get('/dashboard', [Controller::class, 'getDashboardPage'])->name('getDashboardPage');

Auth::routes();

Route::get('/success', [App\Http\Controllers\HomeController::class, 'index'])->name('success');
