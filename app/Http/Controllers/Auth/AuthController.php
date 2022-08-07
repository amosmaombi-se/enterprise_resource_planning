<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;


class AuthController extends Controller
{
    
    public function index()
    {
        return view('auth.login');
    }  

    public function userLogin()
    {   
        $credentials = request()->validate([
            'email'    =>  'required|email|string|exists:users,email',
            'password' => 'required|string',
        ]);


        if(!Auth::attempt($credentials)){
            return redirect('/')->with('error', 'Wrong username or password');
         }
        return redirect('dashboard')->with('success', 'User login successfully');

    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('success', 'User logout successfully');
    }

    public function forgetPassword()
    {
        return view('auth.forget-password');
    }


    public function updatePassword()
    {
        $credentials = request()->validate([
           'email'    =>  'required|email|string|exists:users,email',
        ]);

        dd($credentials);
    }
}
