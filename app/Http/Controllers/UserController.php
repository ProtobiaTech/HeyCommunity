<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * User login page
     */
    public function login()
    {
        return view('web.users.login');
    }

    /**
     * User login handler
     */
    public function loginHandler()
    {
        \Illuminate\Support\Facades\Auth::login(\App\Models\User::inRandomOrder()->first());

        return redirect()->route('home');
    }

    /**
     * User signup page
     */
    public function signup()
    {
        return view('web.users.signup');
    }

    /**
     * User signup handler
     */
    public function signupHandler(Request $request)
    {
        dd($request->all());
    }

    /**
     * User logout handler
     */
    public function logoutHandler()
    {
        Auth::logout();

        return redirect()->back();
    }
}
