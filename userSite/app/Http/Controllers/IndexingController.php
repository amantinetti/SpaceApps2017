<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RevIndex;
use App\SpaceObject;
use App\SendObj;

class IndexingController extends Controller{


    public function search(){

    }

    public function parse_object($object)
    {
        $type = $object->Type()->first();
        $properties = $object->Properties()->get();
        $parsed_data = array();
        $name = $object->name;
        foreach (explode(' ',$name) as $word) {
            array_push($parsed_data, (string)$word);
        }
        $name = $type->name;
        foreach (explode(' ',$name) as $word) {
            array_push($parsed_data, (string)$word);
        }
        foreach ($properties as $item) {
            $values = (string)$item->value;
            foreach (explode(' ', $values) as $value){
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

}
