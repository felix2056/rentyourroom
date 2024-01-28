<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index');
    }

    public function register()
    {
        return view('account.register');
    }

    public function login()
    {
        return view('account.login');
    }
}
