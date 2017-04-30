<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SpaceObject;
use App\Property;

class ObjProp extends Model{

    protected $fillable = [
        'id', 'space_object_id', 'property_id', 'value', 'points'
    ];

    public function SpaceObject(){
        return $this->belongsTo('SpaceObject','id','space_object_id');
    }
    public function Property(){
        return $this->belongsTo('Property','id','property_id');
    }
}
