<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjProp extends Model{

    protected $fillable = [
        'id', 'space_object_id', 'property_id', 'value', 'points'
    ];
}
