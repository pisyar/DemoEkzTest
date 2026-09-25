<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::post('/register', [UserController::class, "register"])->name('register');
Route::post('/login', [UserController::class, "login"])->name('login');
Route::get('/logout', [UserController::class, "logout"])->name('logout');
Route::get('/viewreg', [UserController::class, "viewreg"])->name('viewreg');
Route::get('/viewlog', [UserController::class, "viewlog"])->name('viewlog');
Route::get('/homepage', [UserController::class, "homepage"])->name('homepage');
Route::get('/viewprofile', [UserController::class, "viewprofile"])->name('viewprofile');
Route::get('/viewadminpanel', [UserController::class, "viewadminpanel"])->name('viewadminpanel');
Route::get('/viewcreate', [UserController::class, "viewcreate"])->name('viewcreate');

Route::get('/vieworder', [OrderController::class, "vieworder"])->name('vieworder');
Route::post('/order', [OrderController::class, "order"])->name('order');
