<?php

namespace App\Http\Controllers;

use App\Models\Common\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'entity_type'       =>  'required|string',
            'entity_id'         =>  'required|integer',
            'content'           =>  'required|string',
            'parent_id'         =>  'nullable|integer',
        ]);

        $belongEntity = with(new $request->entity_type())->query()->findOrFail($request->entity_id);

        $data = $request->only(['entity_type', 'entity_id', 'content', 'parent_id']);
        $data['user_id'] = Auth::id();
        $data['floor_number'] = Comment::where([
                'entity_type'   =>  $request->get('entity_type'),
                'entity_id'     =>  $request->get('entity_id'),
            ])->withTrashed()->count() + 1;
        $data['floor_number'] = $belongEntity->comments()->withTrashed()->count() + 1;
        if ($request->get('parent_id')) {
            $parentComment = Comment::findOrFail($request->get('parent_id'));
            $data['root_id'] = $parentComment->root_id ?: $parentComment->id;
        }

        $comment = Comment::create($data);

        if ($comment) {
            // event(new \App\Events\SendCommentNotification($comment->entity->user, Auth::user(), $comment));
            $comment->entity->increment('comment_num');

            if ($comment->parent) {
                // event(new \App\Events\SendCommentNotification($comment->parent->user, Auth::user(), $comment));
                $comment->parent->increment('comment_num');
            }

            // record user activity log
            // event(new \App\Events\UserActiveRecordEvent('CommentStore', Auth::user(), $comment));

            // flash('评论成功')->success();

            $comment->load(['user', 'parent', 'parent.user', 'root', 'root.user']);
            return response()->json($comment);
            return back();
        } else {
            return abort(500, '评论失败，请稍后再试');
        }
    }
}
