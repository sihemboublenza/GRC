<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    function login()
    {
        return view('login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::guard('back')->attempt($credentials))
        {
            return redirect('dashboard');
        }
        if(Auth::guard('front')->attempt($credentials))
        {
            return redirect('index');
        }
        return redirect('login')->with('success', 'Login not valid');
    }

    function register()
    {
        return view('signup');
    }

    function validate_signup(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|unique:users',
            'nom'=> 'required',
            'prenom'=> 'required',
            'password'=> 'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prennom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registered, you can login');
    }

    function dashboard(Request $request)
    {
        if(Auth::check())
        {
            return view('admin.index');
        }

        return redirect('login')->with('success', 'Access denied');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
