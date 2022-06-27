<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('new/pp');
});

///customer controller

///add or signup
Route::get('/customer/add', [CustomerController::class, 'addCustomer'])->name('customer.add');
Route::post('/customer/add', [CustomerController::class, 'addCustomerSubmit'])->name('customer.add.submit');

///login
Route::get('/customer/login',[CustomerController::class,'login']);
Route::post('/customer/login',[CustomerController::class,'loginsubmit'])->name('customer.login.submit');

///panel
Route::get('/customer/panel',[CustomerController::class,'customerPanel'])->name('customer.panel');

//logout
Route::get('/customer/logout', [CustomerController::class, 'cusotmerLogout'])->name('customer.logout');

///profile
Route::get('/customer/profile', [CustomerController::class, 'customerProfile'])->name('customer.profile');

///room book
Route::get('/customer/room/book', [CustomerController::class, 'customerRoomBook'])->name('customer.room.book');
Route::post('/customer/room/book', [CustomerController::class, 'customerRoomBookSubmit'])->name('customer.room.book.submit');

/// book room list
Route::get('/customer/room/book/list', [CustomerController::class, 'customerRoomBookList'])->name('customer.room.book.list');

///Delete room book
Route::get('/customer/room/book/delete/{id}',[CustomerController::class,'customerRoomBookDelete'])->name('customer.room.book.delete');

//edit room book
Route::get('/customer/room/book/edit/{id}',[CustomerController::class,'customerRoomBookEdit'])->name('customer.room.book.edit');
Route::post('/customer/room/book/edit',[CustomerController::class,'customerRoomBookEditSubmit'])->name('customer.room.book.edit.submit');



























