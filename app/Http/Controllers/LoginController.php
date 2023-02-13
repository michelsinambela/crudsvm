<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    // form login proses
    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
    }

    public function register(){
        return view('register');
    }

    // form save database register
    public function registeruser(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'password2' => bcrypt($request->password2),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }
}
