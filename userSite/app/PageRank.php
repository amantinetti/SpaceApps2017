<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageRank extends Model{

    protected $fillable = [
        'id', 'page', 'points'
    ];
}
