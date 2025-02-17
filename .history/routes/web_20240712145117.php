<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Backend\UserController;
Use App\Http\Controllers\Backend\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/index', [DashBoardController::class, 'index'])-> name('auth.admin');
Route::get('/admin', [AuthController::class, 'index'])-> name('auth.admin');
Route::post('/login', [AuthController::class, 'login'])-> name('auth.login');