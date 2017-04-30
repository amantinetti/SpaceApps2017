<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendObj extends Model{

    protected $fillable = [
        'name', 'page', 'type', 'properties'
    ];
}
