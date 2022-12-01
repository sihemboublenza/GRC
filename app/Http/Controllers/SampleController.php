<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller
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

        if(Auth::attempt($credentials))
        {

            return redirect('dashboard');
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
            'name'=> 'required',
            'password'=> 'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registered, you can login');
    }

    function dashboard(Request $request)
    {
        if(Auth::check())
        {
            return view('layout.index');
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
