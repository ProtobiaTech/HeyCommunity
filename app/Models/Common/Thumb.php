<?php

namespace App\Models\Common;

use App\Models\BaseModel;

class Thumb extends BaseModel
{
    public $types = [
        'thumb_up'      =>  'Thumb Up',
        'thumb_down'    =>  'Thumb Down',
    ];

    /**
     * Relation Entity
     */
    public function entity()
    {
        return $this->morphTo('entity', 'entity_type', 'entity_id');
    }
}
