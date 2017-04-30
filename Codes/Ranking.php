<?php
function Algoritm($objeto){
  if($puntos = DB::Table('page_rank')->where('page',$objeto->page)->value('points')){
    if($id = DB::Table('objeto')->where('name',objeto->name)->value('id'){
      foreach ($objeto->properties=>$prop) {
        if(DB::Table('properties')->where('name',$prop['name'])->value('name')){

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
          $newValue->save();
        }
