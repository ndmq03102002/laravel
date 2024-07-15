<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Backend\UserController;
Use App\Http\Controllers\Backend\AdController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', {});