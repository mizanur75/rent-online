<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Auth;

class RegisterController extends Controller
{

    use RegistersUsers;

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
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
