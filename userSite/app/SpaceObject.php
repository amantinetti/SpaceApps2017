<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaceObject extends Model{

    protected $table = 'space_objects';

    protected $fillable = [
        'name', 'type_id', 'id'
    ];



}
