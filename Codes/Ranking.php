<?php

function Algoritm($objeto){

  $mod = false;
  if($puntos = DB::Table('page_rank')->where('page',$objeto->page)->value('points')){
    if($id = DB::Table('objeto')->where('name',objeto->name)->value('id'){
      foreach ($objeto->properties=>$prop) {
        $value=$objeto->value;
        $propid=DB::Table('properties')->where('name',$prop['name'])->value('id')
        if(DB::Table('properties')->where('name',$prop['name'])->value('name')){
          $pointbase = ObjProp::where([
            [ 'space_object_id', $id],
            [ 'property_id', $propid]]);
          if($puntos>$pointbase->points){
            $pointbase->points = $puntos;
            $pointbase->value= $value;
            $pointbase->save();
            mod = true;
            }
          }

        else{
          $newprop = new Property();
          $newprop->name = $prop['name'];
          $newprop->points = $puntos;
          $newprop->save();
          $insertprop = Property::where('name', $prop['name'])->first();
          $newvalue = new ObjProp();
          $newvalue->property_id=$insertprop->id;
          $newvalue->space_object_id=$id;
          $newValue->value=$prop['value'];
          $newValue->points=$puntos;
          $newValue->save()
          mod = true;
        }
      }


    }
  }
  if(mod==true){
    return $id;
  }
  return -1;
}
