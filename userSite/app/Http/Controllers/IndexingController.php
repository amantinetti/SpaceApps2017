<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RevIndex;
use App\SpaceObject;
use App\SendObj;
use App\Http\Controllers\InputRankingController;

class IndexingController extends Controller{


    public function search($string){
        $arr = explode(" ",$string);
        for($i=0;i<count($arr);$i++){
            $index = RevIndex::find('word',$arr[$i]);
        }
    }

    public function runIndex($inputObj){
        $rankingController = new InputRankingController();
        $id = $rankingController->Algoritm($inputObj);
        if($id<0)
            return;
        $obj = SpaceObject::find($id);
        $data = $this->parse_object($obj);
        $this->insertIndex($data,$id);
    }

    public function parse_object($object){

        $type = $object->Type()->first();
        $properties = $object->Properties()->get();
        $parsed_data = array();
        $name = $object->name;
        foreach (explode(' ', $name) as $word) {
            array_push($parsed_data, (string)$word);
        }
        $name = $type->name;
        foreach (explode(' ', $name) as $word) {
            array_push($parsed_data, (string)$word);
        }
        foreach ($properties as $item) {
            $values = (string)$item->value;
            foreach (explode(' ', $values) as $value) {
                array_push($parsed_data, $value);
            }

            $subitem = $item->Property()->first();
            $name = (string)$subitem->name;
            foreach (explode(' ', $name) as $subsubitem) {
                array_push($parsed_data, (string)$subsubitem);
            }
        }
        return $parsed_data;
    }

    public function insertIndex($array, $object_id){
        DB::table('rev_indices')->where('space_object_id', $object_id)->delete();
        for($i=0;$i<count($array);$i++){
            RevIndex::create([
                'word' => $array[$i],
                'pos' => $i,
                'space_object_id' => $object_id,
            ]);
        }
    }

}
