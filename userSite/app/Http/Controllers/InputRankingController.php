<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ObjProp;
use App\Property;
use App\SendObj;

class InputRankingController extends Controller{


    function testData(){
      $p = array("name"=>'tamaño',"value"=>'200');
      $obj = new SendObj();
      $obj->name="sol";
      $obj->page="test.cl";
      $obj->properties=[$p];
      return $obj;
    }



    function Algoritm($objeto){

        $mod = false;
        $id = -10;
        if($puntos = DB::Table('page_ranks')->where('page',$objeto->page)->value('points')){
            if($id = DB::Table('space_objects')->where('name',$objeto->name)->value('id')){
                foreach ($objeto->properties as $prop) {
                    $value=$prop['value'];
                    $propid = DB::Table('properties')->where('name',$prop['name'])->value('id');
                    if(DB::Table('properties')->where('name',$prop['name'])->value('name')){
                        $pointbase = ObjProp::where([
                            [ 'space_object_id', $id],
                            [ 'property_id', $propid]])->first();
                        if($puntos>$pointbase->points){
                            $pointbase->points = $puntos;
                            $pointbase->value= $value;
                            $pointbase->save();
                            $mod = true;
                        }
                    } else{
                        $newprop = new Property();
                        $newprop->name = $prop['name'];
                        $newprop->points = $puntos;
                        $newprop->save();
                        $insertprop = Property::where('name', $prop['name'])->first();
                        $newvalue = new ObjProp();
                        $newvalue->property_id=$insertprop->id;
                        $newvalue->space_object_id=$id;
                        $newvalue->value = $prop['value'];
                        $newvalue->points=$puntos;
                        $newvalue->save();
                      $mod = true;
                    }
                }

            }
        }
        if($mod==true){
            return $id;
        }
        return -1;
    }
}
