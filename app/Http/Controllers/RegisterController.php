<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        if(Auth::check()) return redirect()->route('home.index');

        return view('auth.register');
    }

    public function store(Request $request)
    {
        //applying transformations to 'username' before validating
        $request->merge([
            'username' => Str::slug(Str::lower($request->input('username')))
        ]);
        
        $validatedData = $request->validate([
            'name' => ['required', 'min:5', 'max:30'],
            'username' => 'required|unique:users,username|min:3|max:25',
            'email' => 'required|email|unique:users|max:60',
            'password' => 'required|confirmed|min:6',
        ]);

        $validatedData["password"] = Hash::make($validatedData["password"]);

        $user = User::Create($validatedData);

        if($user){
            // auth user
            Auth::attempt($request->only('username', 'password'));

            return redirect()->route('posts.index');
        } 

        return redirect()->route('home.index');
    }
}
