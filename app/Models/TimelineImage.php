<?php

namespace App\Models;

class TimelineImage extends BaseModel
{
    /**
     * Get Avatar Attribute
     */
    public function getFilePathAttribute($value)
    {
        return $value;
        return makeCdnAssetPath($value, '?imageView2/2/w/1000');
    }
}
