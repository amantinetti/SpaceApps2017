<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ObjProp;
use App\Type;

class SpaceObject extends Model{

    protected $table = 'space_objects';

    protected $fillable = [
        'name', 'type_id', 'id'
    ];

    public function Properties(){
        return $this->hasMany('ObjProp','space_object_id','id');
    }
    public function Type(){
        return $this->belongsTo('Type','id','type_id');
    }
}