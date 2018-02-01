<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public  function login1(){
        return view('log-in');
    }
    public function login(){
        return view('login-logout.login');
    }
}
