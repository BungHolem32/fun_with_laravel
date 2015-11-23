<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Languages-old extends Model {

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


    public function addKey($key){
        $this->langKeys[] = $key;
    }

    public static function getTranslation($langKeys, $lang_id=null){

        if($lang_id===null)
            $lang_id = \Request::local()->id;

        $res = \DB::select("SELECT lang_key,value FROM translations WHERE lang_id = {$lang_id} AND lang_key IN ('". implode("','", $langKeys) ."')");
        $langKeyVal = array();
        foreach($res as $keyVal){
            $langKeyVal[$keyVal->lang_key] = $keyVal->value;
        }
        return $langKeyVal;
    }

    /**
     * @author Yuri
     * @param $key
     * @param int $lang_id
     * @param string $module
     * @return mixed
     */
    public static function getTrans($key, $lang_id=null, $module='general'){

        if($lang_id===null)
            $lang_id = \Request::local()->id;

        $params = [$lang_id, $module,  $key];
       // $res = \DB::select("SELECT lang_key,value FROM translations WHERE `module`=? AND lang_id = ? AND lang_key = ? LIMIT 1", $params);
        if($lang_id != 4) {
            $res= \DB::select("
                SELECT `translations`.`value` as `OriginalValue`,`remoteLang`.`value`as `translateValue`,`remoteLang`.`id` as `translateId` FROM `translations`
                LEFT JOIN `translations`as `remoteLang` ON `translations`.`lang_key`=`remoteLang`.`lang_key` and `remoteLang`.`lang_id`=?
                WHERE `translations`.`module`= ? AND `translations`.`lang_id` = 4 AND `translations`.`lang_key` = ? LIMIT 1", $params);
        } else {
            $res = \DB::select("SELECT `translations`.`value` as `remoteLang` FROM translations WHERE lang_id = ? AND `module`=? AND lang_key = ? LIMIT 1", $params);
        }

        //\DB::select("SELECT {$defaultLn},{$remoteLn} from `translations` where `key`=? and `module`=? limit 1");
        //dd($res);
        if(!empty($res)){
            if (!empty($res[0]->remoteLang)) {
                return $res[0]->remoteLang;
            } else {
                if(!isset($res[0]->translateId)) {
                    \DB::insert("INSERT INTO translations (lang_id, `module`,  lang_key) VALUES (?, ?, ?); ", $params);
                }
                if(empty($res[0]->translateValue))
                    return $res[0]->OriginalValue;
                return $res[0]->translateValue;
            }
        }

        return $key;
    }
}
