<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo;

    public function __construct()
    {
        if(Auth::check() && Auth::user()->role->id == 1){
            $this->redirectTo = route('admin.dashboard');
        }elseif (Auth::check() && Auth::user()->role->id == 2) {
            $this->redirectTo = route('rentgiver.dashboard');
        }elseif (Auth::check() && Auth::user()->role->id == 3) {
            $this->redirectTo = route('renttaker.dashboard');
        }else{
            $this->redirectTo = route('login');
        }
        $this->middleware('guest')->except('logout');
    }
}
