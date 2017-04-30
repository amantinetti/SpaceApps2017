<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function exoplanet(){
        return view('exoplanet');
    }

    public function stars(){
        return view('stars');
    }

    public function systems_solar(){
        return view('systems_solar');
    }

    public function galaxies(){
        return view('galaxies');
    }
}
