<?php

namespace App\Models\Common;

use App\Models\BaseModel;

class Favorite extends BaseModel
{
    /**
     * Relation Entity
     */
    public function entity()
    {
        return $this->morphTo('entity', 'entity_type', 'entity_id');
    }
}
