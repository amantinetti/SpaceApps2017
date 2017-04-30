<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RevIndex;
use App\SpaceObject;
use App\SendObj;
use App\Http\Controllers\InputRankingController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class IndexingController extends Controller{

    public function perfect($indexes, $words){
        $size = count($words);
        $lookup = collect($indexes)->groupBy('space_object_id')->toArray();
        foreach ($lookup as $id) {
            $jumps = 0;
            if(count($id) < $size) {
                continue;

            }
            $actual_pos = $id[0]['pos'];
            foreach ($id as $index){
                if($actual_pos == $index['pos']) {
                    $actual_pos = $index['pos'];
                }else if($actual_pos+1 == $index['pos']) {
                    $actual_pos++;
                    $jumps++;
                }else {
                    break;
                }
                if($jumps == $size-1)
                    return $index['space_object_id'];

            }

        }
        return -1;

    }
    public function notPerfect($indexes, $words){
        $size = count($words);
        $lookup = collect($indexes)->groupBy('space_object_id')->toArray();
        $list = array();
        foreach ($lookup as $id) {
            $jumps = 0;

            $actual_pos = $id[0]['pos'];
            foreach ($id as $index){
                if($actual_pos == $index['pos']) {
                    continue;
                }else if($actual_pos+1 == $index['pos']) {
                    $actual_pos++;
                    $jumps++;
                }else {
                    break;
                }
            }
            array_push($list, [
                'space_object_id' => $id[0]['space_object_id'],
                'matches' => $jumps
            ]);

        }
        $list = collect($list)->sortByDesc('matches')->toArray();
        return $list[0]['space_object_id'];

    }

    public function search($string){
        $arr = explode(' ',strtolower($string));
        $indexes = array();
        foreach ($arr as $word){
            $index = DB::table('rev_indices')->where('word', $word)->get();
//            $word_array = array();
            foreach ($index as $subindex) {
                array_push($indexes, [
                    'space_object_id' => $subindex->space_object_id,
                    'pos' => $subindex->pos
                ]);
            }
        }

        $id = $this->perfect($indexes,$arr);
        if($id > 0)
            return SpaceObject::find($id);
        $id = $this->notPerfect($indexes, $arr);

        return SpaceObject::find($id);
    }

    public function runIndex($inputObj){
        $rankingController = new InputRankingController();
        $id = $rankingController->Algoritm($inputObj);
        if($id<0)
            return;
        echo "Object Update id->" .$id."\n";
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
            array_push($parsed_data, strtolower($word));
        }
        $name = $type->name;
        foreach (explode(' ', $name) as $word) {
            array_push($parsed_data, strtolower($word));
        }
        foreach ($properties as $item) {
            $values = (string)$item->value;
            foreach (explode(' ', $values) as $value) {
                array_push($parsed_data, strtolower($value));
            }

            $subitem = $item->Property()->first();
            $name = (string)$subitem->name;
            foreach (explode(' ', $name) as $subsubitem) {
                array_push($parsed_data, strtolower($subsubitem));
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

    /*use App\Http\Controllers\IndexingController;
    $in = new IndexingController();
    $in->indexFileJson("test.json");*/


    public function indexFileJson($file){
        $path = storage_path() . '/app/index/' . $file;

        if (File::exists($path)) {
            $fileRead = File::get($path);

            $objarray = array();

            $json = json_decode($fileRead);
            $page = $json->page;
            $type = $json->type;
            foreach ($json->Data as $prop){
                $name = $prop->name[0];
                //print_r($prop->name);
                if(is_array($name))
                    $name = $name[0];
                //echo $name ."\n";
                $property = $prop->property[0];
                //print_r($prop->property);
                if(is_array($property))
                    $property = $property[0];
                //echo $property ."\n";
                $value = $prop->value[0];
                //print_r($prop->value);
                if(is_array($value)){
                    $tv="";
                    foreach ($value as $v){
                        if(is_array($v)){
                            foreach ($value as $v2){
                                if(is_array($v2)){
                                    $tv = $tv . " " . implode(" ",$v2);
                                }else
                                    $tv = $tv ." ". $v2;
                            }
                        }else
                            $tv = $tv ." ". $v;
                    }
                    $value = $tv;
                }
                    //$value = implode(" ",$value);
                //echo $value ."\n";
                if(array_key_exists($name, $objarray)){
                    $p = array("name"=>$property,"value"=>$value);
                    //echo "---------------\n";
                    //print_r($objarray[$name]->properties);
                    //print_r($p);
                    $prop = $objarray[$name]->properties;
                    //print_r($prop);
                    $n = count($prop);
                    $prop[$n]=$p;
                    $objarray[$name]->properties = $prop;
                    //array_push($objarray[$name]->properties, $p);
                }else{
                    echo "Creating New Object->".$name."\n";
                    $p = array("name"=>$property,"value"=>$value);
                    $obj = new SendObj();
                    $obj->name = $name;
                    $obj->page = $page;
                    $obj->type = $type;
                    $obj->properties = [$p];
                    $objarray[$name] = $obj;
                }
            }
            $i=0;
            foreach ($objarray as $obj){
                $i++;
                echo "Running Index ->".$obj->name ."\n";
                $this->runIndex($obj);
            }
            echo "Full Index ".$i."elements\n";
            return true;
        }
        return false;
    }

}
