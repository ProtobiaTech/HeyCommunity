<?php

namespace App\Http\Controllers;

use App\Models\Common\Comment;
use App\Models\Common\Thumb;
use App\Models\Timeline;
use App\Models\TimelineImage;
use App\Models\TimelineVideo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'imageIds'      =>  'nullable|array',
            'imageIds.*'    =>  'integer',
            'videoIds'      =>  'nullable|array',
            'videoIds.*'    =>  'integer',
        ]);

        $timeline = new Timeline();
        $timeline->fill([
            'user_id'   =>  Auth::id(),
            'content'   =>  $request->get('content'),
        ]);

        if ($timeline->save()) {
            // has images or videos
            if ($request->get('imageIds')) TimelineImage::whereIn('id', $request->get('imageIds'))->update(['timeline_id' => $timeline->id]);
            if ($request->get('videoIds')) TimelineVideo::whereIn('id', $request->get('videoIds'))->update(['timeline_id' => $timeline->id]);

            setUkNotice('分享动态成功', 'success');

            return redirect()->route('timelines.index');
        } else {
            setUkNotice('分享动态失败', 'danger');

            return back();
        }
    }

    /**
     * Upload image
     */
    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'file'      =>  'required|image',
        ]);

        $filePath = Storage::putFile('uploads/timlines/images', $request->file);

        $timelineImage = TimelineImage::create([
            'user_id'       =>  Auth::id(),
            'file_path'     =>  $filePath,
            'image_width'   =>  getimagesize($request->file)[0],
            'image_height'  =>  getimagesize($request->file)[1],
        ]);

        return response()->json($timelineImage);
    }

    /**
     * Upload video
     */
    public function uploadVideo(Request $request)
    {
        $this->validate($request, [
            'file'      =>  'required|file',
        ]);

        $filePath = Storage::putFile('uploads/timlines/videos', $request->file);

        $timelineVideo = TimelineVideo::create([
            'user_id'       =>  Auth::id(),
            'file_path'     =>  $filePath,
        ]);

        return response()->json($timelineVideo);
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

        if ($comment) {
            $timeline->increment('comment_num');

            setUkNotice('评论成功', 'success');
        }

        return redirect()->back();
    }
}
