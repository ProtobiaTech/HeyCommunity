<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * User login handler
     */
    public function loginHandler()
    {
        \Illuminate\Support\Facades\Auth::login(\App\Models\User::inRandomOrder()->first());

        return redirect()->back();
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
