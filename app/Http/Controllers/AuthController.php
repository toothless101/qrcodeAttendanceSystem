<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function register(){
        return view('auth.register');
    }

    function login(){
        return view('auth.login');
    }

    function dashboard(){
        return view('dashboard');
    }
}
