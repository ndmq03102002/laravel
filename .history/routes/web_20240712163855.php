<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Backend\UserController;
Use App\Http\Controllers\Backend\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Middleware\AuthenticateMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/index', [DashBoardController::class, 'index'])-> name('dashboard.index')->middleware();
Route::get('/admin', [AuthController::class, 'index'])-> name('auth.admin');
Route::get('/logout', [AuthController::class, 'logout'])-> name('auth.logout');
Route::post('/login', [AuthController::class, 'login'])-> name('auth.login');