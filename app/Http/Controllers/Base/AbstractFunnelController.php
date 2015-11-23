<?php namespace App\Http\Controllers\Base;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\mongo;
use App\Page;
use Request;


class AbstractFunnelController extends Controller {


    public function index($page)
    {
        /*if(Request::get('rs') == 1){
            $page->
        }*/
        return view($this->dirName().'/index')->with('page', $page);
        //return view('funnels.funnelClean')->with('page', $page);
    }

    public function getPageLayouts(){
        $temp = [];
        foreach(\File::files(base_path().'/resources/views/funnels/layouts/page-layout') as $pageLayout){
            $exo = explode('/', $pageLayout);
            $cont = str_replace('.blade.php', '', end($exo));
            //if($cont != 'Controller')
            $temp[$cont] = $cont;
        }
        return $temp;
    }

    public function getForms(){
        $forms = Page::find(34)->getChildren();
        $temp = array();
        foreach($forms as $form){
            $temp[$form->id] = $form->title->get();
        }
        return $temp;
    }
}
