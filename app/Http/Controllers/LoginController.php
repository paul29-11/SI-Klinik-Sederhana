<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index()
    {
        return view("login/index");
    }
    function proses(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Passoword Wajib Diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with('success','Login Berhasil') ;
        } else{
            return redirect('/login')->withErrors('Username Dan Passowrd Salah');
        };
    }
    function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'Berhasil Logout');
    }

}

// by->zwan06