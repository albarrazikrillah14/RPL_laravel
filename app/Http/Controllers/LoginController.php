<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

use function Symfony\Component\String\b;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['email:dns', 'required'],
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->intended('/dashboard');
        }
        return back()->with('LoginError', 'Login Failed');
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
