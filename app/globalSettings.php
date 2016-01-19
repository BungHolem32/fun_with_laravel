<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class globalSettings extends Model {

    protected $table = 'global_settings';
    protected $setKeys = [];
    protected $fillable = ['key,value'];

    /**
     * Get the routes for the setuage.
     */
    public function routes()
    {
        return $this->hasMany('App\route');
    }


    /**
     * Get the pages for the setuage.
     */
    public function pages()
    {
        return $this->hasMany('App\Page');
    }


    public static function getAll(){
        $temp = [];
        foreach(setuages::all(['id', 'title']) as $set){
            $temp[$set->id] = $set->title;
        }
        return $temp;
    }

    public static function getAllCode(){
        $temp = [];
        /*foreach(setuages::where('active','=',1)->where('visible','=',1)->orderby('position')->get(['code', 'title_native']) as $set){
            //if()
            $temp[strtolower($set->code)] = $set->title_native;
        }
        return $temp;*/
    }


    public function addKey($key){
        $this->setKeys[] = $key;
    }

    public static function getTranslation($setKeys, $set_col=null, $module=null){

        $setKeys = array_unique($setKeys);
        $founded  = array();

        if($set_col===null)
            $set_col = \Request::local()->code;

        $set_col = strtolower($set_col);


        //$res = \DB::select("SELECT set_key,{$set_col} AS translation FROM translations WHERE set_key IN ('". implode("','", $setKeys) ."')");

        foreach($setKeys as $key => $val){
            $temp[] = '?';
            $values[] = $val;
        }
/*        $sql = "SELECT set_key,{$set_col} AS `translation`
                FROM `translations`
                WHERE set_key IN (". implode(",", $temp) .")";

        $res = \DB::select($sql, $values);*/

        $setKeyVal = array();
        foreach($res as $keyVal){
            $setKeyVal[$keyVal->set_key] = $keyVal->translation;
            $founded[] = $keyVal->set_key;
        }

        $missing = array_diff($setKeys,$founded);
        self::insertTranslations($missing);
        return $setKeyVal;
    }


    public static function getTrans($key, $set_code=null, $module='general'){

        if($set_code===null)
            $set_code = \Request::local()->code;

        $translated = self::getTranslation([$key], $set_code, $module);

        if(!empty($translated[$key]))
            return $translated[$key];
        else
            return $key;
    }


    protected static function insertTranslations(array $setKeys){

        if(!empty($setKeys)){
            foreach($setKeys as $key){
                $values[] = $key;
                $ques[] = '?';
            }
         /*   $sql = 'INSERT INTO translations (set_key) VALUES ('.implode('),(', $ques).');';
            \DB::insert($sql, $values);*/
        }
    }
}
