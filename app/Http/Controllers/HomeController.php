<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }
    public function blog(){
        return view('front.blog');
    }
}
