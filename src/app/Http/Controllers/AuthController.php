<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    /*新規会員登録 STEP1*/
    public function register()
    {
        return view('auth.register');
    }

    /*新規会員登録 STEP2*/
    public function register2()
    {
        return view('auth.register2');
    }

    /*ログイン画面*/
    public function login()
    {
        return view('login');
    }
}
