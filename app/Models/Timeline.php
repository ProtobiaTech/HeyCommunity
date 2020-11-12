<?php

namespace App\Models;

class Timeline extends BaseModel
{
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
