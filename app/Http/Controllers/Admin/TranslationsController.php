<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Languages;
use Illuminate\Routing\Controller as BaseController;
use Request;


/**
 * Class PageController
 * @package App\Http\Controllers\Admin
 */
class TranslationsController extends BaseController {



    public function index()
	{
        $inputs = Request::all();
        $page = new \App\Page();
        $from = 0;
        $perPage = 30;

        $all = \DB::select("SELECT COUNT(id) as count FROM translations");
        $all = intval($all[0]->count);
        $numOfPages = ceil($all / $perPage) + 1;
        $letters = range('A', 'Z');


        $langs = \DB::select("SELECT * FROM languages WHERE active=1 and visible=1 ORDER BY position ASC;");
        foreach($langs as $ln)
            $AllLangTable[strtolower($ln->code)] = $ln->title;

        if(!empty($inputs['langs'])){
            //$lngs = explode(',', $inputs['langs']);
            $lngs = $inputs['langs'];
            foreach($langs as $ln){
                $ln->code = strtolower($ln->code);
                if(in_array($ln->code, $lngs) || in_array(strtolower($ln->title), $lngs))
                    $langTable[$ln->title] = $ln->code;
            }
        } else
            $langTable = array_flip($AllLangTable);

        if(isset($inputs['p']) && is_numeric($inputs['p'])){
            $current = intval(Request::get('p'));
            $from = ($current-1) * $perPage;
            $trans = \DB::select("SELECT id,lang_key,".implode(',',$langTable)." FROM translations ORDER BY lang_key ASC LIMIT {$from},{$perPage}");
        }
        elseif(!empty($inputs['letter'])){
            $current = Request::get('letter');
            $trans = \DB::select("SELECT id,lang_key,".implode(',',$langTable)." FROM translations WHERE lang_key LIKE '{$current}%' ORDER BY lang_key ASC");
        }
        elseif(!empty($inputs['search'])){
            $current = '';
            $q = $inputs['search'];
            $searchSQL = array_map(function($code) use($q) {return " OR ".$code." LIKE ? ";}, $langTable);
            $new_langs = $langTable;
            array_push($new_langs,1);
            //dd(array_values(array_map(function() use($q) {return "'".$q."%'";}, $langTable)));
            \DB::enableQueryLog();
            $trans = \DB::select("
                SELECT id,lang_key,".implode(',',$langTable)."
                FROM translations
                WHERE lang_key LIKE ?
                ".implode(' ', $searchSQL)."
                ORDER BY lang_key ASC", array_values(array_map(function() use($q) {return "{$q}%";}, $new_langs)));
        }
        else{
            $current = 1;
            $trans = \DB::select("SELECT id,lang_key,".implode(',',$langTable)." FROM translations ORDER BY lang_key ASC LIMIT 0,{$perPage}");
        }


        return view('admin.settings.translations')->with(compact('page','trans','AllLangTable','langTable','numOfPages','letters','current','from'));
	}



    public function update()
	{
        $inputs = Request::all();

        if(isset($inputs['u']))
            foreach($inputs['u'] as $id => $data){
                $sq = array_map(function($d, $k){return $k."='".htmlspecialchars(trim($d))."'";}, $data, array_keys($data));
                \DB::update("UPDATE translations SET ".implode(',', $sq)." WHERE id={$id}");
                $msgs[] = ['msg'=>'Saved!', 'alert'=>'success'];
            }

        if(isset($inputs['n'])){
            foreach($inputs['n'] as $i => $data){
                //$msgs[] = ['msg'=>'Code '.$data['code'].' is already taken!', 'alert'=>'danger'];
            }
        }


        return compact('msgs','updated','created');
	}

    public function destroy($lang_id){

    }



    // --------------- Strip alll jeffy stuff from translations.
    /*



    public function update(){
        $langs = \DB::select("SELECT * FROM languages WHERE active=1 and visible=1 ORDER BY position ASC;");
        foreach($langs as $ln)
            $langTable[$ln->title] = strtolower($ln->code);
        $trans = \DB::select("SELECT id,lang_key,".implode(',',$langTable)." FROM translations ORDER BY lang_key ASC");
        //dd($trans);
        foreach($trans as $k => $trn){
            $trans[$k]->lang_key = trim($this->rip_tags($trn->lang_key));
            foreach($langTable as $title => $code) {
                if(isset($trn->$code) && !empty($trn->$code)){
                    $trans[$k]->$code = trim($this->rip_tags($trn->$code));
                }
            }
        }
        //dd($trans);
        foreach($trans as $DBtrn){
            foreach($langTable as $title => $code) {
                $sq[] = $code."='".$DBtrn->$code."'";
            }

            $sql = "UPDATE translations SET lang_key='{$DBtrn->lang_key}', ".implode(',', $sq)." WHERE id={$DBtrn->id}";
            \DB::update($sql);
        }
        die('done!');
    }


    public function rip_tags($string) {

        // ----- remove HTML TAGs -----
        $string = preg_replace ('/<[^>]*>/', ' ', $string);

        // ----- remove control characters -----
        $string = str_replace("\r", '', $string);    // --- replace with empty space
        $string = str_replace("\n", ' ', $string);   // --- replace with space
        $string = str_replace("\t", ' ', $string);   // --- replace with space

        // ----- remove multiple spaces -----
        $string = trim(preg_replace('/ {2,}/', ' ', $string));

        return $string;

    }


    */

}