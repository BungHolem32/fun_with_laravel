<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Languages;
use Carbon\Carbon;
use Franzose\ClosureTable\Tests\Models\Page;
use Request;



class MongoController extends Controller {

    public function order(){
        $inputs = Request::all();
        if(isset($inputs['list']) && !empty($inputs['list'])){
            $list = explode(',',$inputs['list']);
            $list = array_filter($list);
            foreach($list as $pos => $id)
                \DB::update("UPDATE mongos SET position ={$pos} WHERE id={$id};");

            $msgs[] = ['msg'=> 'Order saved.', 'alert'=>'success'];
            return json_encode(['status'=>1, 'msgs'=>$msgs]);
        }
    }

    public function delete(){
        $inputs = Request::all();
        if(isset($inputs['mongo_id']) && !empty($inputs['mongo_id'])){
            \DB::delete("DELETE FROM mongos WHERE id=?;",[$inputs['mongo_id']]);

            $msgs[] = ['msg'=> $inputs['mongo_id'] . ' Deleted.', 'alert'=>'success'];
            return json_encode(['status'=>1, 'msgs'=>$msgs]);
        }
    }

}