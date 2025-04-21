<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FinancialController;
use App\Http\Middleware\CheckIsLogged;

Route::get('/',[LoginController::class,'showLogin'])->name('login.index');
Route::post('/auth',[LoginController::class,'authUser'])->name('login.auth');
Route::get('/logout',[LoginController::class,'logoutUser'])->name('login.logout');
Route::get('/cadastro',[LoginController::class,'showRegiseter'])->name('login.register');

Route::get('/home',[HomeController::class,'showHome'])->name('home.index');
Route::get('/despesas',[FinancialController::class,'showExpenses'])->name('financial.expenses');

    
