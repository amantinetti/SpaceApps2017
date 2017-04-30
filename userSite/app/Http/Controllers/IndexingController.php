<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RevIndex;
use App\SpaceObject;
use App\SendObj;

class IndexingController extends Controller{


    public function search($string){
        $arr = explode(" ",$string);

    }


    public function insertIndex($array, $object_id){
        DB::table('rev_indices')->where('space_object_id', $object_id)->delete();
        for($i=0;i<count($array);$i++){
            RevIndex::create([
                'word' => $array[$i],
                'pos' => $i,
                'space_object_id' => $object_id,
            ]);
        }
    }

}
