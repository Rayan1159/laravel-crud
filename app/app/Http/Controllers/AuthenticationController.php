<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthenticationController extends Controller
{
    public function login(): View {
        return view("auth.login");
    }

    public function register(): View {
        return view("auth.register");
    }
}
