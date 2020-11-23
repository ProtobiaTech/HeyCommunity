<?php

namespace App\Models\Common;

use App\Models\BaseModel;

class Comment extends BaseModel
{
    /**
     * Append attributes
     */
    protected $appends = ['has_thumb_up'];

    /**
     * Relation Entity
     */
    public function entity()
    {
        return $this->morphTo('entity', 'entity_type', 'entity_id')->withTrashed();
    }

    /**
     * Related SubComment
     */
    public function comments()
    {
        return $this->HasMany(self::class, 'parent_id', 'id')->latest();
    }

    /**
     * Related Parent Comment
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id')->withTrashed();
    }

    /**
     * Related Root Comment
     */
    public function root()
    {
        return $this->belongsTo(self::class, 'root_id', 'id')->withTrashed();
    }
}
