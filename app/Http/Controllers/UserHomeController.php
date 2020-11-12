<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use App\Models\User;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    /**
     * User timeline page
     */
    public function timeline(Request $request, User $user)
    {
        $timelines = Timeline::where('user_id', $user->id)->latest()->paginate();

        return view('web.users.home.timeline', compact('user', 'timelines'));
    }
}
