<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    /**
     * Timeline index page
     */
    public function index(Request $request)
    {
        $timelines = \App\Models\Timeline::latest()->paginate();
        $activeUsers = User::inRandomOrder()->limit(5)->get();

        return view('web.timelines.index', compact('timelines', 'activeUsers'));
    }

    /**
     * Timeline store
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content'       =>  'required|string',
        ]);

        $timeline = new Timeline();
        $timeline->fill([
            'user_id'   =>  Auth::id(),
            'content'   =>  $request->get('content'),
        ]);
        $timeline->save();

        return redirect()->route('timelines.index');
    }
}
