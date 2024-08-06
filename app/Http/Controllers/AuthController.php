<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Here mthod login
    public function login()
    {
        return inertia('Login/Login');
    }

    // Here mthod login
    public function register()
    {
        return inertia('Login/Register');
    }
}
