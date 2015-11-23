<?php
namespace App;

use Franzose\ClosureTable\Models\Entity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class old_page extends Entity implements pageInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * ClosureTable model instance.
     *
     * @var pageClosure
     */
    protected $closure = 'App\pageClosure';

    protected $data = array();

    protected $fillable = ['title','slug'];
    protected $loadedArr = array();
    protected $runTimeChildes = [];
    public $controller;
    public $route_id;




    public static function getCurrentPage(){
        $segments = Request::segments();
        if(Request::hasLang()) array_shift($segments);

        if(!$slug = end($segments))
            $slug = '';

        if(is_numeric($slug))
            $dbField = 'page_id';
        else
            $dbField = 'slug';

        $sql = "SELECT id as route_id, page_id, controller FROM routes WHERE lang_id=? AND ".$dbField."=?";
        $res = \DB::select($sql, [Request::local()->id,$slug]);

        if(empty($res))
            abort(404);

        $page_id = $res[0]->page_id;
        $route_id = $res[0]->route_id;

        $page = self::find($page_id);
        $page->controller = $res[0]->controller;
        $page->route_id = $route_id;
        // Load page's data from mongo table
        //$page->loadData();

        return $page;
    }

    /*protected function loadData(){
        $datas = \DB::select("SELECT id FROM mongos WHERE page_id = ?", [$this->id]);

        foreach($datas as $data){
            $mongo = mongo::find($data->id);
            $this->runTimeChildes[$mongo->attributes['key']] = $mongo;
        }
    }*/

    /*
    protected function loadDataAttributes(Mongo $dataSet, $parentKey = null){
        $decendents = $dataSet->getChildren();
        foreach($decendents as $child){
            $temp[$child->key] = $child->value;
            if($child->hasChildren()){
                $this->loadDataAttributes($child,1);
            }
        }
        if($parentKey != null) {
            $temp2['asd'] = $temp;
            //$this->data($dataSet->key,$temp2);
        }
        else{
            //$this->{$dataSet->key}->data($dataSet->key,$temp);
        }


    }
    public static function saveData($page, $key, $object){
        if (func_num_args() != 3)
            abort('404');

        if( (is_array($object) || is_object($object)) && !empty($object)){
            foreach($object as $objkey => $obj){
                $type = gettype($obj);
                $value = '';

                $newChild = new Mongo();
                $newChild->type = $type;
                $newChild->key = $objkey;
                $newChild->value = $value;

                if(in_array($type, ['array','object','resource']) && !empty($obj)){
                    self::saveData($newChild, $objkey, $obj);
                }

                $page->addChild($newChild);
            }
        }

        else{
            foreach($object as $objkey => $obj) {
                $type = gettype($obj);
                $newChild = new Mongo();
                $newChild->type = $type;
                $newChild->key = $objkey;
                $newChild->value = $obj;
                $page->addChild($newChild);
            }
        }
    }*/

    /*public function __get($key){

        $inLoadedArr = array_key_exists($key, $this->loadedArr);
        if(!$inLoadedArr && !$this->hasGetMutator($key) && !in_array($key, $this->attributes)){
            //return mongo::getMongoObj($key, $page_id);
            self::d($key);
            return $this->getMongoData($key);
        }
        return parent::__get($key);
    }*/


    public function __get($key){

        if(!$this->hasGetMutator($key) && !$this->hasAttribute($key)){

            if($this->isMongo($key))
                return $this->mongoValue($key);
                //return $this->runTimeChildes[$key];

            if(isset($this->attributes['id'])){
                $mongo = mongo::getMongoRootFromDB($key, $this->attributes['id']);

                $this->runTimeChildes[$key] = $mongo;
                if($this->isTypeSimple($mongo) && $this->notFrom__Set()){
                    return $mongo->attributes['value'];
                }

                return $mongo;
            }
            return new \stdClass();
        }
       // return $this->attributes[$key];
        return parent::__get($key);
    }

    public function __set($key,$value){
        if(!$this->hasSetMutator($key) && !$this->hasAttribute($key)){
            self::d('setting variable for '.$key);
            $mongo = $this->$key;
            //dd($mongo);
            if($mongo !== false){
                $this->runTimeChildes[$key] = $mongo;
            }
            if($this->isMongo($key)){
                if($this->runTimeChildes[$key]->attributes['value'] == $value){
                    self::d('value the same');
                }
                else{
                    //self::d($mongo->id);
                    //\DB::delete("DELETE FROM mongos WHERE id = ?",[$mongo->id]);

                    //$this->runTimeChildes[$key]->deleteSubtree(true);

                    if($this->isValueSimple($value)){
                        $this->runTimeChildes[$key]->type = gettype($value);
                        $this->runTimeChildes[$key]->attributes['value'] = $value;
                        $this->runTimeChildes[$key]->update();
                    }
                    else{
                        self::d('trying to insert object to '. $key);
                        $childesKeys = $this->getChildesKeys($key);
                        //self::d($childesKeys);
                        foreach($value as $k => $v){
                            if(!in_array($k, $childesKeys)){
                                self::d('creating new '.$k.' key inside '.$key);
                                mongo::createChildNode($this->$key, $k, $v);
                            }
                            else{
                                self::d('set '.$k.' key inside '.$key);
                                mongo::setKey($this->$key, $k, $v);
                                $this->$key->update();
                            }
                        }
                    }
                }
                return true;
            }
            else{
                self::d('create new '.$key);
                $mongoObj = new mongo();

                if(empty($value)){
                    $type = 'object';
                    $v = md5(print_r($value,1));
                }
                else{
                    $type = gettype($value);
                    $v = $value;
                }


                $mongoObj->page_id = $this->attributes['id'];
                //$mongoObj->lang_id = Request::local()->id;
                $mongoObj->type = $type;
                $mongoObj->attributes['key'] = $key;
                $mongoObj->attributes['value'] = $v;

                //mongo::createChildNode($mongoObj, $key, $value);
                //mongo::setKey($mongoObj, $key, $value);

                $mongoObj->update();
                mongo::setKey($mongoObj, $kk, $val);
                if(!$mongoObj->isSimple($type)){
                    foreach($value as $kk => $val){

                    }
                }

                //dd($mongoObj);
                return true;
            }
            return true;
        }

        return parent::__set($key,$value);
    }

    /*public function __call($function, $args){

//        if(is_object($this->$function) && get_class($this->$function) == 'App\mongo'){
//            return $this->runTimeChildes[$function];
//        }
        if($this->isMongo($function)){
            return $this->runTimeChildes[$function];
        }
        return parent::__call($function, $args);
    }*/

    /*public function __call($function, $args){
        return $this->getMongoData($function);
    }*/

    /*protected function getMongoData($key){
        if(isset($this->$key))
            return $this->$key;

        $res = \DB::select("SELECT id FROM mongos WHERE page_id = ? AND `key` = ?", [$this->id, $key]);
        $mongo = mongo::findOrFail($res[0]->id);
        $this->loadedArr[$key] = $mongo;
        return $mongo;
    }*/

    protected function notFrom__Set(){
        $caller = debug_backtrace();
        if($caller[2]['function'] == '__set')
            return false;
        return true;
    }

    public static function getRootPages(){
        $pages = self::all()->where('parent_id', null);
        return $pages;
    }

    /**
     * Get the Page for the route.
     */
    public function slug()
    {
        $res = \DB::select("SELECT slug FROM routes WHERE page_id = ? AND lang_id = ?", [$this->attributes['id'], Request::local()->id]);
        if(!empty($res))
            return $res[0]->slug;
        return false;
    }

    public function routes()
    {
        return $this->hasMany('App\route');
    }

    public function getControllers(){
        $temp = [];
        foreach(\File::files(__DIR__.'/Http/Controllers') as $control){
            $exo = explode('/', $control);
            $cont = str_replace('.php', '', end($exo));
            if($cont != 'Controller')
                $temp[$cont] = $cont;
        }
        return $temp;
    }

    public function getLanguageId(){

    }

    public function getControllerName(){
        return strtolower($this->controller);
    }

    public static function newCheckSlug($slug){
        $slug = str_slug($slug);
        $res = \DB::select("SELECT page_id FROM routes WHERE slug = ?",[$slug]);

        if(empty($res))
            return $slug;

        return false;

    }

}