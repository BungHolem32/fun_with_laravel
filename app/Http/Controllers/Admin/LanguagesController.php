<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Languages;
use Illuminate\Routing\Controller as BaseController;
use Request;


/**
 * Class PageController
 * @package App\Http\Controllers\Admin
 */
class LanguagesController extends BaseController {



    public function index()
	{
        $page = new \App\Page();
        return view('admin.settings.languages')->with(['page'=>$page]);
	}



    public function update()
	{
        $inputs = Request::all();

        if(isset($inputs['u']))
            foreach($inputs['u'] as $id => $data){
                $lang = Languages::find($id);

                if( (isset($data['code']) && empty($data['code'])) || (isset($data['title']) && empty($data['title'])) )
                    $msgs[] = ['msg'=>'Can\'t save a Language without code or Title fields.', 'alert'=>'danger'];
                elseif(isset($data['code']) && \Schema::hasColumn('translations', strtolower($data['code'])))
                    $msgs[] = ['msg'=>'Code '.$data['code'].' is already taken!', 'alert'=>'danger'];
                else{
                    foreach($data as $column => $val){
                        if($column == 'code')
                            \Schema::table('translations', function($table) use($lang,$val) {$table->renameColumn($lang->code, strtolower($val));});
                        $lang->$column = $val;
                    }
                    $msgs[] = ['msg'=> $lang->title.' Language saved.', 'alert'=>'success'];
                    $lang->save();
                    $updated[$id] = $lang;
                }
            }

        if(isset($inputs['n'])){
            foreach($inputs['n'] as $i => $data){
                if(empty($data['code']) || empty($data['title']))
                    $msgs[] = ['msg'=>'Can\'t Create a new Language without code or Title fields.', 'alert'=>'danger'];
                elseif(\Schema::hasColumn('translations', strtolower($data['code']))){
                    $msgs[] = ['msg'=>'Code '.$data['code'].' is already taken!', 'alert'=>'danger'];
                }
                else{
                    $lang = new Languages();
                    foreach($data as $column => $val){
                        $lang->$column = $val;
                        if($column == 'code')
                            \Schema::table('translations', function ($table) use($val) {$table->string($val);});

                    }
                    $msgs[] = ['msg'=> $lang->title.' Language saved.', 'alert'=>'success'];
                    $lang->save();
                    $created[$lang->id] = $lang;
                }
            }
        }
        if(isset($inputs['list']) && !empty($inputs['list'])){
            $list = explode(',',$inputs['list']);
            foreach($list as $pos => $id)
                \DB::update("UPDATE languages SET position ={$pos} WHERE id={$id};");

            $msgs[] = ['msg'=> 'Order saved.', 'alert'=>'success'];
        }

        return compact('msgs','updated','created');
	}

    public function destroy($lang_id){

    }


}