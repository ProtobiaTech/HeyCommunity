<?php

namespace App\Models;

use App\Models\Common\Thumb;
use Illuminate\Support\Facades\Auth;

class Timeline extends BaseModel
{
    /**
     * Append attributes
     */
    protected $appends = ['has_thumb_up'];

    /**
     * Relate Timeline Image
     */
    public function images()
    {
        return $this->hasMany(TimelineImage::class);
    }

    /**
     * Related Comment
     */
    public function rootComments()
    {
        return $this->morphMany('App\Models\Common\Comment', 'entity')
            ->whereNull('parent_id')->latest();
    }

    /**
     * Related Comment
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Common\Comment', 'entity')->latest();
    }

    /**
     * Related Comment
     */
    public function hot5Comments()
    {
        return $this->morphMany('App\Models\Common\Comment', 'entity')
            ->orderByDesc('thumb_up_num', 'comment_num')
            ->limit(5)
            ->latest();
    }
}
