<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/',[LoginController::class,'showLogin'])->name('login.index');
Route::post('/auth',[LoginController::class,'authUser'])->name('login.auth');

Route::get('/home',[HomeController::class,'showHome'])->name('home.index');
