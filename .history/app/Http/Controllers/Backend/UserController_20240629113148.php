<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){

    }
    
    public function login(Request $request){
        return view('backend.login');
    }
        
    
}
