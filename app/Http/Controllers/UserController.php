<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function loginHandler(Request $request)
    {
        $this->validate($request, [
            'phone'         =>  'required|string',
            'password'      =>  'required|string'
        ]);

        if (Auth::attempt([
            'phone'     =>  $request->get('phone'),
            'password'  =>  $request->get('password'),
        ], true)) {
            return redirect()->route('home');
        } else {
            return back()->withInput()->withErrors([
                'default'   =>  '手机号或密码不正确',
            ]);
        }
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
        $this->validate($request, [
            'nickname'      =>  'required|string|min:3|max:20',
            'phone'         =>  'required|string|size:11',
            'password'      =>  'required|string|confirmed|min:6|max:20'
        ]);

        $user = User::create([
            'nickname'      =>  $request->get('nickname'),
            'phone'         =>  $request->get('phone'),
            'password'      =>  Hash::make($request->get('password')),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    /**
     * User logout handler
     */
    public function logoutHandler()
    {
        Auth::logout();
        setUkNotice('登出成功 ~', 'success');

        return redirect()->back();
    }
}
