<?php
/**
 * User: krch_Vova
 * Date: 17.05.2017
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Object extends Model
{
    /**
     * Имя таблицы
     * @var string
     */

    protected $table = 'objects';

    public static function addObject($request)
    {
        $object = new self();
        $object->user_id = Auth::id();
        $object->name = $request->input('m4mEntityName');
        $object->device_id = $request->input('deviceId');
        $object->category = $request->input('category');
        $object->mac = $request->input('deviceMac');
        $object->city = $request->input('city');
        $object->save();
    }
}