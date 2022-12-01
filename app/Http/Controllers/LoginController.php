<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index');
    }

    public function acesso(Request $request)
    {
        return view('Home');
    }

}
