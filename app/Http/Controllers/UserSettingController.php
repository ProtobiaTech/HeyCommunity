<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSettingController extends Controller
{
    /**
     * User setting profile page
     */
    public function profile()
    {
        $user = Auth::user();

        return view('web.users.settings.profile', compact('user'));
    }

    /**
     *
     */
    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'nickname'      =>  'required|string|min:3|max:20',
            'realname'      =>  'nullable|string|min:2|max:8',
            'email'         =>  'nullable|email',
        ]);

        $user = Auth::user();
        $user->update([
            'nickname'      =>  $request->get('nickname'),
            'realname'      =>  $request->get('realname'),
            'email'         =>  $request->get('email'),
        ]);

        return back();
    }
}
