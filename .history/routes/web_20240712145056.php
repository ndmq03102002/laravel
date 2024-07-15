<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Backend\UserController;
Use App\Http\Controllers\Backend\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/index', [AuthController::class, 'index'])-> name('auth.admin');
Route::get('/admin', [AuthController::class, 'index'])-> name('auth.admin');
Route::post('/login', [AuthController::class, 'login'])-> name('auth.login');