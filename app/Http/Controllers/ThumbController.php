<?php

namespace App\Http\Controllers;

use App\Models\Common\Thumb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThumbController extends Controller
{
    /**
     * Handler
     */
    public function handler(Request $request)
    {
        $this->validate($request, [
            'entity_type'       =>  'required|string',
            'entity_id'         =>  'required|integer',
            'type'              =>  'required|string',
            'value'             =>  'required|boolean',
        ]);

        $entityName = $request->get('entity_type');
        $entity = (new $entityName)->findOrFail($request->get('entity_id'));

        $entityThumbNumColumn = $request->get('type') . '_num';

        if ($request->get('value')) {
            $thumb = Thumb::firstOrCreate([
                'user_id'       =>  Auth::id(),
                'entity_type'   =>  $request->get('entity_type'),
                'entity_id'     =>  $request->get('entity_id'),
                'type'          =>  $request->get('type'),
            ]);

            if ($thumb->wasRecentlyCreated) $entity->increment($entityThumbNumColumn);
        } else {
            $count = Thumb::where([
                'user_id'       =>  Auth::id(),
                'entity_type'   =>  $request->get('entity_type'),
                'entity_id'     =>  $request->get('entity_id'),
                'type'          =>  $request->get('type'),
            ])->delete();

            if ($count) $entity->decrement($entityThumbNumColumn, $count);
        }

        // TODO: ukNotice

        return response()->json($entity);
    }
}
