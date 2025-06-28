<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','register')->name('register.form');
Route::post('/register',[UserController::class,'register'])->name('register.submit');

Route::view('/login','login')->name('login.form');
Route::post('/login',[UserController::class,'login'])->name('login.submit');

Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::post('logout',[UserController::class,'logout'])->name('logout');





