<?php
namespace App;

use App\Http\Controllers\RedirectController;
use App\Services\Domains;
use Franzose\ClosureTable\Models\Entity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class Page extends Entity implements PageInterface
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
    protected $closure = 'App\PageClosure';

    protected $data = array();

    protected $fillable = ['title','slug'];
    protected $loadedArr = array();
    protected $loadedAssets = array();
    protected $runTimeChildes = [];
    public $controller;
    public $route_id;
    public $slug;
    public $root_id;
    public $root;
    public $ancestor = [];
    public $ancestors = [];




    public function getRoot(){
        if(!isset($this->root)){
            if(!isset($this->root_id))
                $this->root_id = $this->getAncestorsByDepth(0)->id;
            $this->root = \App\Page::find($this->root_id);
        }
        return $this->root;
    }


    public static function getCurrentPage(){
        $segments = Request::segments();
        if(Request::hasLang()) array_shift($segments);

        if(!$slug = end($segments))
            $slug = '';

        $lang_id = Request::local()->id;
        $slugArrayTimes = count($segments) - 1;
        $slugsArray = array_reverse($segments);

        if(is_numeric($slug)){
            $dbField = 'page_id';
            $sql = "SELECT id as route_id, page_id, controller
                    FROM routes
                    WHERE lang_id={$lang_id}
                    AND ".$dbField."=?";
            $res = \DB::select($sql, [$slug]);
        }
        else if($slugArrayTimes > 0){
            $sql = "SELECT p.id AS page_id, r.id AS route_id, controller
                    FROM routes AS r
                    INNER JOIN pages AS p ON p.id = r.page_id
                    WHERE r.lang_id={$lang_id}
                    AND r.slug = ? AND p.parent_id IN (".self::sqlParent($slugArrayTimes).")";
            $res = \DB::select($sql, $slugsArray);
        }
        else {
            $sql = "SELECT p.id AS page_id, r.id AS route_id, controller
                    FROM routes AS r
                    INNER JOIN pages AS p ON p.id = r.page_id
                    WHERE r.lang_id={$lang_id}
                    AND r.slug = ? AND p.parent_id IS NULL";
            $res = \DB::select($sql, [$slug]);
        }

        // OLD QUERY
        //$sql = "SELECT id as route_id, page_id, controller FROM routes WHERE lang_id=? AND ".$dbField."=?";

        if(empty($res)){
            //http_response_code(404);
            //RedirectController::movePage('/', 404);
            //return new RedirectResponse(route('Home'));
            abort(404);
        }


        $page_id = $res[0]->page_id;
        $page = self::find($page_id);
        $page->setRoute($res[0]);

        return $page;
    }

    public function setRoute($route){
        $this->route_id = $route->route_id;
        $this->controller = $route->controller;
    }

    public static function getPages($lang_id, $slug){
        $pages = [];
        if(is_numeric($slug))
            $sql = "SELECT page_id FROM routes WHERE lang_id=? AND page_id = ?";
        else{
            $sql = "SELECT page_id FROM mongos WHERE lang_id=? AND page_id IS NOT NULL
                    AND `type` = 'string' AND `key` = 'title' AND `value` LIKE ?";
            $slug = "%{$slug}%";
        }

        $res = \DB::select($sql, [$lang_id,$slug]);
        foreach($res as $pg){
            $pages[] = self::find($pg->page_id);
        }
        return $pages;
    }



    public function __get($key){
        if(!$this->hasGetMutator($key) && !$this->hasAttribute($key)){

            if($this->isMongo($key) && $this->notFrom__Set())
                return $this->mongoValue($key);

            if(isset($this->attributes['id'])){
                $ln = null;
                if($key == 'title')
                    $ln = '4';
                if($mongo = mongo::getMongoRootFromDB($key, $this->attributes['id'], $ln))
                    $this->runTimeChildes[$key] = $mongo;
                else{
                    $mongo = $this->newMongo($key);
                }
                return $mongo;
            }

            return new mongo();
        }
        return parent::__get($key);
    }

    public function __set($key, $value){
        if(!$this->hasSetMutator($key) && !$this->hasAttribute($key)) {
            $mongo = $this->__get($key);
            if($this->isMongoObj($mongo)){
                mongo::setKey($mongo, $key, $value);
            }
            else{
                $mongo = $this->newMongo($key, $value);
                $this->runTimeChildes[$key] = $mongo;
            }
        }
        else
            parent::__set($key,$value);
    }


    protected function newMongo($key, $value=null){
        $mongo = new mongo();
        $mongo->lang_id = Request::local()->id;
        $mongo->page_id = $this->attributes['id'];
        //$mongoObj->lang_id = Request::local()->id;
        if($value != null)
            $type = gettype($value);
        else{
            $type = 'object';
            $value = md5(print_r($value,1));
        }


        $mongo->type = $type;
        $mongo->key = $key;
        $mongo->value = $value;
        $mongo->update();
        return $mongo;
    }


    protected function notFrom__Set(){
        $caller = debug_backtrace();
        if($caller[2]['function'] == '__set')
            return false;
        return true;
    }

    public static function getRootPages(){
        //$pages = self::all()->where('parent_id', null);
        $res = \DB::select(
            "SELECT p.id, value as title FROM `pages` as p
            LEFT JOIN mongos as m ON p.id = m.page_id
            WHERE p.parent_id IS NULL
            AND lang_id=4
            AND `key` = 'title'
            AND type='string'
            ORDER BY p.position ASC;");
        return $res;
    }

    public function slug()
    {
        if(isset($this->slug))
            return $this->slug;

        $res = \DB::select("SELECT slug FROM routes WHERE page_id = ? AND lang_id = ?", [$this->attributes['id'], Request::local()->id]);
        if(!empty($res)){
            $this->slug = $res[0]->slug;
            return $this->slug;
        }

        return false;
    }
    public function fullSlug(){
        return self::fullSlugStatic($this);
    }
    public static function fullSlugStatic($page){

        if(is_numeric($page))
            $page = Page::find($page);

        $res = \DB::select("SELECT slug
                    FROM page_closure AS pc
                    LEFT JOIN pages AS p ON pc.ancestor = p.id
                    LEFT JOIN routes AS r ON r.page_id = p.id AND r.lang_id = ".\Request::local()->id."
                    WHERE pc.descendant = ".$page->id.";");

        if(empty($res)){
            /*if($page->getControllerName() == 'RedirectController')
                $page = \App\Page::find($page->redirect);
            return self::fullSlugStatic($page);*/
            return $page->slug();
        }


        $u = [];
        foreach($res as $s){
            array_push($u,$s->slug);
        }
        return implode('/', array_reverse($u));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
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

    public function getLanguages(){
        $res = \DB::select(
            "SELECT l.id,title,code
            FROM languages AS l
            LEFT JOIN routes AS r ON l.id = r.lang_id
            WHERE r.page_id = {$this->id}
            ORDER BY l.position ASC");
        return $res;
    }

    public function getControllerName(){
        if(isset($this->controller))
            return strtolower($this->controller);

        else{
            $lang_id = Request::local()->id;
            $res = \DB::select("SELECT id AS route_id, controller FROM routes WHERE page_id = {$this->id} AND lang_id = {$lang_id}");

            if(empty($res))
                return '#';

            $this->route_id = $res[0]->route_id;
            $this->controller = $res[0]->controller;
        }
        return strtolower($this->controller);

    }

    public static function newCheckSlug($slug){
        $slug = str_slug($slug);
        $res = \DB::select("SELECT page_id FROM routes WHERE slug = ?",[$slug]);

        if(empty($res))
            return $slug;

        return false;

    }

    public function appendAsset($url , $media=""){
        if(!in_array($url, $this->loadedAssets)){
            $this->loadedAssets[] = $url;
            return $this->asset($url, $media);
        }
    }

    private function asset($url, $media){
        if(substr($url, -3) == 'css')
            return '<link href="'.$url.'" media="'.$media.'" rel="stylesheet" >';
        elseif(substr($url, -2) == 'js')
            return '<script src="'.$url.'"></script>';
        else{

        }
    }

    public function getBreadcrumbs(){
        $temp = $this->getAncestors();
        foreach($temp as $i => $ancestor)
            $answer[] = $ancestor;

        $answer[] =  $this->getRoot();
        return array_reverse($answer);
    }


    public function getChildrenTitles() {
        $childs = [];
        $children = $this->getChildren();
        foreach ($children as $child) {
            $childs[$child->slug()] = $child->title;
        }
        return $childs;
    }


    public function getAncestorsByDepth($depth=0) {

        if($this->real_depth == $depth)
            return $this;

        $ansectorName = 'root_'.$depth;
        $this->ancestor[$ansectorName] = null;
        if(isset($this->ancestor[$ansectorName]))
            return $this->ancestor[$ansectorName];

        $temp = \DB::select("SELECT id FROM pages AS p
                            JOIN page_closure AS pc ON p.id = pc.ancestor AND pc.descendant = {$this->id}
                            WHERE p.real_depth = {$depth}");

        if(isset($temp[0])){
            $this->ancestor[$ansectorName] = \App\Page::find($temp[0]->id);
            return  $this->ancestor[$ansectorName];
        }

        return false;
    }


    public function getAncestorsIds(){
        if(!empty($this->ancestors))
            return $this->ancestors;

        $ans = $this->getAncestors(['id'])->toArray();
        $temp = [];
        $temp[] = $this->id;
        if(!empty($ans) && is_array($ans))
            foreach($ans as $an){
                $temp[] = $an['id'];
            }
        return $temp;
    }

    public function getDescendentsIds(){
        if(!empty($this->ancestors))
            return $this->ancestors;

        $ans = $this->getDescendants(['id'])->toArray();
        $temp = [];
        $temp[] = $this->id;
        if(!empty($ans) && is_array($ans))
            foreach($ans as $an){
                $temp[] = $an['id'];
            }
        return $temp;
    }

    public function isActive($real_ids){
        $ancestors = $this->getAncestorsIds();
        if(is_numeric($real_ids) && in_array($real_ids, $ancestors))
            return ' active';
        elseif(is_array($real_ids)){
            foreach($real_ids as $real_id){
                if(in_array($real_id, $ancestors))
                    return ' active';
            }
        }
        return '';
    }

    public function inDomain($domain=''){
        $domain = Domains::domainName($domain);
        if ($domain == 'funnels') return true; // HACK!
        if(strval($this->domain)){
            $domains = explode(',', $this->domain);
            if(!in_array($domain, $domains)){
                return false;
            }
        }
        return true; // if no domain is set, or if domain matches
    }


    private static function sqlParent($slugArrayTimes){
        $inner = '';
        if($slugArrayTimes > 1){
            $slugArrayTimes--;
            $inner = "WHERE routes.slug = ? AND pages.parent_id IN (".self::sqlParent($slugArrayTimes).")";
        }
        else if($slugArrayTimes == 1){
            $inner = "WHERE routes.slug = ? AND parent_id IS NULL";
        }
        $sql = "SELECT pages.id FROM pages LEFT JOIN routes ON routes.page_id = pages.id {$inner}";
        return $sql;
    }
}