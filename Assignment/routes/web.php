<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', [function () {return view('welcome');}])->name('welcome');

Route::get('/registration',[function(){return view('register');}])->name('user.registration');

Route::post('/registration',[userController::class, 'validateRegistration'])->name('submit.registration');

Route::get('/login',[function () {return view('login');}])->name('user.login');

Route::post('/login',[userController::class, 'checkLogin'])->name('submit.login');

Route::get('/dashboard/admin',[userController::class, 'admin_Dashboard'])->name('admin.dashboard');

Route::get('/dashboard',[userController::class, 'user_Dashboard'])->name('user.dashboard');

Route::get('/user/details/{id}',[userController::class, 'userDetail'])->name('user.detail');