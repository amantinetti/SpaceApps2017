<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RevIndex extends Model{

    protected $fillable = [
        'word', 'pos', 'space_object_id'
    ];
}
