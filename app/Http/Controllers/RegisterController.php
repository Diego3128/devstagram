<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'min:5', 'max:30'],
            'username' => 'required|unique:users|min:3|max:25',
            'email' => 'required|email|unique:users|max:60',
            'password' => 'required|confirmed',
        ]);
    }
}
