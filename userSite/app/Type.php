<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model{

    protected $fillable = [
        'id', 'name'
    ];

    public function SpaceObjects(){
        return $this->hasMany('App\SpaceObject','type_id','id');
    }
}
