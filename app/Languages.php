<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Languages extends Model {

    protected $table = 'languages';
    protected $langKeys = [];
    protected $fillable = ['title,title_native,code,code03'];

    /**
     * Get the routes for the language.
     */
    public function routes()
    {
        return $this->hasMany('App\route');
    }


    /**
     * Get the pages for the language.
     */
    public function pages()
    {
        return $this->hasMany('App\Page');
    }


    public static function getAll(){
        $temp = [];
        foreach(languages::all(['id', 'title']) as $lang){
            $temp[$lang->id] = $lang->title;
        }
        return $temp;
    }

    public static function getAllCode(){
        $temp = [];
        foreach(languages::where('active','=',1)->where('visible','=',1)->orderby('position')->get(['code', 'title_native']) as $lang){
            //if()
            $temp[strtolower($lang->code)] = $lang->title_native;
        }
        return $temp;
    }


    public function addKey($key){
        $this->langKeys[] = $key;
    }

    public static function getTranslation($langKeys, $lang_col=null, $module=null){

        $langKeys = array_unique($langKeys);
        $founded  = array();

        if($lang_col===null)
            $lang_col = \Request::local()->code;

        $lang_col = strtolower($lang_col);


        //$res = \DB::select("SELECT lang_key,{$lang_col} AS translation FROM translations WHERE lang_key IN ('". implode("','", $langKeys) ."')");

        foreach($langKeys as $key){
            $temp[] = '?';
        }
        $sql = "SELECT lang_key,{$lang_col} AS translation FROM translations WHERE lang_key IN (". implode(",", $temp) .")";
        $res = \DB::select($sql, $langKeys);

        $langKeyVal = array();
        foreach($res as $keyVal){
            $langKeyVal[$keyVal->lang_key] = $keyVal->translation;
            $founded[] = $keyVal->lang_key;
        }

        $missing = array_diff($langKeys,$founded);
        self::insertTranslations($missing);

        return $langKeyVal;
    }


    public static function getTrans($key, $lang_code=null, $module='general'){

        if($lang_code===null)
            $lang_code = \Request::local()->code;

        $translated = self::getTranslation([$key], $lang_code, $module);

        if(!empty($translated[$key]))
            return $translated[$key];
        else
            return $key;
    }


    protected static function insertTranslations(array $langKeys){
        if(!empty($langKeys)){
            foreach($langKeys as $key){
                $values[] = $key;
                $ques[] = '?';
            }
            \DB::insert("INSERT INTO translations (lang_key) VALUES (".implode('),(', $ques).");", $values);
        }
    }
}
