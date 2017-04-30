<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model{

    protected $attributes = [
        'detail' =>'None', 'if_unique'=>true
    ];

    protected $fillable = [
        'name', 'detail', 'if_unique', 'points'
    ];

    public function ObjProps(){
        return $this->hasMany('App\ObjProp','property_id','id');
    }
}
