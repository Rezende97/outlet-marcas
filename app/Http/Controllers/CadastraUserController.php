<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CadastraUserController extends Controller
{
    public function index()
    {
        return view('cadastra.index');
    }

    public function cadastra(Request $request)
    {

        $validation = $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required'
        ]);

        $password = Hash::make($validation['password']);

        $validation['password'] = $password;

        User::create($validation);

        return view('Login.index');
    }
}
