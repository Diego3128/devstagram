<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){

        if(Auth::check()) return redirect()->route('posts.index');

        return view('auth.login');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|',
            'password' => 'required',
        ]);

        // auth user
        if(!Auth::attempt($validatedData, $request->remember)) return back()->with('error','wrong credentials');
    
        return redirect()->route('posts.index')->with('success','welcome');
    }
}
