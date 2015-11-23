<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\mongo;
use Request;
use Illuminate\Support\Facades\Auth;

class FunnelController extends Base\AbstractFunnelController {

    /*protected $page;

    public function __construct($page)
    {
        $this->
    }*/

    /*public function index($page)
    {

        return view($this->dirName().'/index')->with('page', $page);
        //return view('funnels.funnelClean')->with('page', $page);
    }*/

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
}
