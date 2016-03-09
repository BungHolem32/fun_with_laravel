<?php namespace App\Http\Controllers\Base;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\mongo;
use App\Page;
use Request;


class AbstractFunnelController extends Controller {

    protected $show_recaptcha = false;
    protected $form = null;

    public function __construct(){
        parent::__construct();
    }

    public function index($page)
    {
        $this->form = \App\Page::find($page->formType);
        view()->share('show_recaptcha', $this->show_recaptcha);
        return view($this->dirName().'/index')
                ->with('page', $page)
                ->with('form', $this->form);
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
