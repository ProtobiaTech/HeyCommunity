<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSettingController extends Controller
{
    /**
     * User profile setting page
     */
    public function profile()
    {
        $user = Auth::user();

        return view('web.users.settings.profile', compact('user'));
    }

    /**
     * User profile update
     */
    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'nickname'      =>  'required|string|min:3|max:20',
            // 'realname'      =>  'nullable|string|min:2|max:8',
            'gender'        =>  'required|integer',
            'email'         =>  'nullable|email',
            'bio'           =>  'nullable|string|max:50',
        ]);

        $user = Auth::user();
        $user->update([
            'nickname'      =>  $request->get('nickname'),
            'gender'        =>  $request->get('gender'),
            'email'         =>  $request->get('email'),
            'bio'           =>  $request->get('bio'),
        ]);

        return back();
    }
}
