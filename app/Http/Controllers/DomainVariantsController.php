<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 2/16/2016
 * Time: 3:21 PM
 */

namespace App\Http\Controllers;


use App\Page;
use Illuminate\View\View;

class DomainVariantsController extends Controller
{
    /**
     * @param Page $page
     * @return View
     */
    public function index($page){
        $children = $page->getChildren();
        $domain = $_SERVER['HTTP_HOST'];

        /**
         * @var $child Page
         */
        foreach($children as $child){
            $domains = explode(',', $child->domain);
            if(in_array($domain, $domains)){
                $routes = $child->routes()->get();
                foreach($routes as $route){
                    if($route->lang_id == \Request::local()->id)
                        break;
                } //NOTE: uses last route as default
                $child->setRoute($route);
                return parent::forThis($child, 'index');
            }
        }
        abort(404);
    }
}