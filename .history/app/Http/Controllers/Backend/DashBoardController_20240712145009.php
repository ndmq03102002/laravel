<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct(){

    }
    
    public function index()
    {
        echo 1;die()
        // return view('backend.dashboard.index');
    }
        
    
}
