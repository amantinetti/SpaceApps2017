<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SpaceObject;
use App\Property;

class ObjProp extends Model{

    protected $fillable = [
        'space_object_id', 'property_id', 'value', 'points'
    ];

    public function SpaceObject(){
        return $this->belongsTo('App\SpaceObject','space_object_id','id');
    }
    public function Property(){
        return $this->belongsTo('App\Property','property_id','id');
    }
}
