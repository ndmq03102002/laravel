<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Backend\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', {});