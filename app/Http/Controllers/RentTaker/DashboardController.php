<?php

namespace App\Http\Controllers\RentTaker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('renttaker.dashboard');
    }
}
