<?php
namespace App;

use Franzose\ClosureTable\Models\Entity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class mongo extends Entity implements mongoInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mongos';
    /**
     * ClosureTable model instance.
     *
     * @var mongoClosure
     */
    protected $closure = 'App\mongoClosure';


    protected $changedChildes = [];
    protected $newChildes = [];
    protected $runTimeChildes = [];
    protected $fillable = ['parent_id','page_id','type','key','value'];

    public function __toString(){
        if($this->isTypeSimple($this))
            return $this->attributes['value'];
        else
            return '';
            //return dump($this);
            //return '<pre>'.print_r($this->attributes,1).' Childes: '.print_r($this->getChildrenKeys(),1).'</pre>';
    }
    public function __call($function, $args){
        if($this->isMongo($function)){
            return $this->runTimeChildes[$function]->get();
        }
        return parent::__call($function, $args);
    }
    public function __set($key, $val){

        if(!$this->hasSetMutator($key) && !$this->hasAttribute($key) && !in_array($key, $this->fillable) ){
            if($this->getMongoData($key)){
                return self::setKey($this, $key, $val);
            }

            else{
                // Create child Node;
                $this->newChildes[] = $key;
                return self::createChildNode($this,$key,$val);
            }
        }
        return parent::__set($key,$val);
    }
    public function __get($key){
        if(!$this->hasGetMutator($key) && !$this->hasAttribute($key)){
            return $this->getMongoData($key);
        }
        return parent::__get($key);
    }

    public function json(){
        return parent::__toString();
    }
    public function get(){
        if($this->isTypeSimple($this))
            return $this->attributes['value'];
        else
            return $this->getChildrenKeys();
    }



    public function addChildes(){
        foreach ($this->runTimeChildes as $objKey => $mongoObj){
            if(is_object($mongoObj) && get_class($mongoObj)=='App\mongo'){
                $child = $this->addChild($mongoObj, null, true);
                $child->addChildes();
                $child->save();
            }
        }
    }

    public function update(array $options = array()){
        $this->addChildes();
        $this->save();
    }

    protected static function createChildNode($mongo, $key, $val){


        if(!empty($mongo->{$key})){
            $mongo->d($mongo->{$key});
            $mongo->{$key}->deleteSubtree(true);
            $mongo->save();
        }


        $type = gettype($val);
        $newNode = new mongo();
        $newNode->type = $type;
        $newNode->key = $key;

        if($newNode->isSimple($type))
            $newNode->value = $val;
        else{
            $newNode->value = md5(print_r($val,1));
            foreach($val as $k => $value){
                self::createChildNode($newNode, $k, $value);
            }
        }
        $mongo->runTimeChildes[$key] = $newNode;
        //d('set');
        //d($mongo);
        $mongo->update();
        return true;

    }

    protected static function setKey(mongo $mongo, $key, $val){
        // Exist and don't need update
        if($mongo->getMongoData($key) == $val)
            return true;


        if($mongo->isMongo($key)){
            // if it has childes delete them and add new.
            if($mongo->runTimeChildes[$key]->hasChildren()){
                $mongo->runTimeChildes[$key]->deleteSubtree(true);
                return self::setKey($mongo, $key, $val);
            }

            $mongo->changedChildes[] = $key;
            if($mongo->isValueSimple($val)) {
                // simple put';
                $mongo->runTimeChildes[$key]->type = gettype($val);
                $mongo->runTimeChildes[$key]->value = $val;
                dd($mongo);
                return true;
            }
        }
        return self::createChildNode($mongo,$key,$val);

        // Exist but needs update
        /*elseif(!$mongo->runTimeChildes[$key]->hasChildren())
        {
            $mongo->changedChildes[] = $key;
            if($mongo->isValueSimple($val)) {
                // simple put';
                $mongo->runTimeChildes[$key]->type = gettype($val);
                $mongo->runTimeChildes[$key]->value = $val;
                return true;
            }
            else{
                // need to create new mongo object';
                return self::createChildNode($mongo,$key,$val);
            }
        }
        else{
            // removing subtree including root and then repopulate;
            $mongo->runTimeChildes[$key]->deleteSubtree(true);
            return self::setKey($mongo, $key, $val);
        }*/
    }

    protected function getMongoData($key)
    {
        if($this->isMongo($key))
            return $this->mongoValue($key);

        $res = null;
        if(isset($this->attributes['id']))
            $res = mongo::getMongoFromDB($key, $this->attributes['id']);

        if (empty($res)) {
            $caller = debug_backtrace();
            if ($caller[1]['function'] == "__get")
                return '';
                //abort(403, 'Variable "'.$key.'" was not found in "'.$this->attributes['key'].'"');

            else
                return '';
                //return false;
        }

        $mongo = mongo::findOrFail($res[0]->id);
        $this->runTimeChildes[$key] = $mongo;
        //return $mongo->get();
        return $this->mongoValue($key);
    }

    public static function getMongoObj($key, $page_id){
        $ans = mongo::getMongoRootFromDB($key, $page_id);
        if($ans === false){
            $mongoObj = new mongo();
            $mongoObj->page_id = $page_id;
            $mongoObj->type = 'object';
            $mongoObj->key = $key;
            $mongoObj->save();
            return $mongoObj;
        }
        return $ans;
    }

    public static function getMongoRootFromDB($key, $page_id){
        //$res = \DB::select("SELECT id FROM mongos WHERE page_id = ? AND lang_id = ? AND `key` = ?", [$page_id, Request::local()->id, $key]);
        $res = \DB::select("SELECT id FROM mongos WHERE page_id = ? AND `key` = ?", [$page_id, $key]);

        if(empty($res)) return false;

        $mongo = mongo::findOrFail($res[0]->id);
        return $mongo;
    }

    public static function getMongoFromDB($key, $parent_id=null){
        return \DB::select("SELECT id FROM mongos WHERE parent_id = ? AND `key` = ?", [$parent_id, $key]);
    }

    protected function getChildrenKeys(){
        $temp = [];
        $childes = $this->getChildren();
        foreach($childes as $child){
            if($this->isMongoObj($child))
                if($this->isTypeSimple($child))
                    $temp[$child->attributes['key']] = $child->attributes['value'];
                else
                    $temp[$child->attributes['key']] = $child->attributes['type'].'()';
        }
        return $temp;
    }
}
