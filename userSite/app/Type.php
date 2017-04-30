<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model{

    protected $fillable = [
        'id', 'name'
    ];

    public function SpaceObjects(){
        return $this->belongsToMany('App\SpaceObject','id','type_id');
    }
}
