<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model{

    protected $fillable = [
        'id', 'name', 'detail', 'if_unique', 'points'
    ];
}
