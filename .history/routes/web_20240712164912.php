<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Backend\UserController;
Use App\Http\Controllers\Backend\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::->middleware('authenticate')get('/dashboard/index', [DashBoardController::class, 'index'])-> name('dashboard.index');
Route::get('/admin', [AuthController::class, 'index'])-> name('auth.admin')->middleware('login');
Route::get('/logout', [AuthController::class, 'logout'])-> name('auth.logout');
Route::post('/login', [AuthController::class, 'login'])-> name('auth.login');