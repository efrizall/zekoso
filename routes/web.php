<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', '/auth', 301);
Route::controller(AuthController::class)->group(function(){
    Route::get('/auth', 'index')->name('auth');
    Route::get('/register', 'register')->name('register');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard');
});