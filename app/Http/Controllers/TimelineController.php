<?php

namespace App\Http\Controllers;

use App\Models\Common\Comment;
use App\Models\Common\Thumb;
use App\Models\Timeline;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Timeline index page
     */
    public function index(Request $request)
    {
        $timelineQuery = \App\Models\Timeline::latest();

        if ($request->get('q')) {
            $whereStr = '%' . $request->get('q') . '%';
            $timelineQuery->where('content', 'like', $whereStr);
        }

        $timelines = $timelineQuery->paginate();
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

    /**
     * Set thumb up for timeline
     */
    public function setThumbUp(Request $request, Timeline $timeline)
    {
        $thumb = Thumb::create([
            'user_id'           =>  Auth::id(),
            'entity_type'       =>  get_class($timeline),
            'entity_id'         =>  $timeline->id,
            'type'              =>  'thumb_up',
        ]);

        if ($thumb) {
            $timeline->increment('thumb_up_num');
        }

        return redirect()->back();
    }

    /**
     * Comment timeline
     */
    public function commentStore(Request $request, Timeline $timeline)
    {
        $this->validate($request, [
            'content'       =>  'required|string',
        ]);

        $comment = Comment::create([
            'user_id'           =>  Auth::id(),
            'entity_type'       =>  get_class($timeline),
            'entity_id'         =>  $timeline->id,

            'floor_number'      =>  $timeline->comments()->count(),
            'content'           =>  $request->get('content'),
        ]);

        if ($comment) $timeline->increment('comment_num');

        return redirect()->back();
    }
}
