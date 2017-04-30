<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SendObj;
use App\SpaceObject;
use App\Type;
use App\ObjProp;
use App\Property;
use Log;
use App\Http\Controllers\IndexingController;

class SiteController extends Controller{

    public function object($id){
        $obj = SpaceObject::find($id);
        $type = $obj->Type()->first()->value('name');
        $data = $obj->Properties()->get();
        $pdata = array();
        foreach ($data as $d){
            $prop = Property::where('id',$d->property_id)->first()->value('name');
            $na= array( 'name'=>$prop, 'value'=>$d->value);
            array_push($pdata,$na);
        }
        $send = new \stdClass();
        $send->name=$obj->name;
        $send->type=$type;
        $send->properties = $pdata;
        return view("object")->with('content', $send);
    }

    public function search(Request $request){
        Log::info('SuperRequest->' . $request);
        $searched = $request['sc'];
        $in = new IndexingController();
        $list = $in->search($searched);
        Log::info('SuperList->' . $list);
        return redirect('obj/'. $list['id']);
    }
}
