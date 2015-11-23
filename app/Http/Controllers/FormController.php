<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\mongo;
use App\Page;
use App\Services\SpotApi;
use Illuminate\Support\Facades\Redirect;
use Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller {

    /*public function __construct()
    {

    }*/

    /*public function index($page)
    {
        //return view('funnels.funnelClean')->with('page', $page);
    }*/

    public function getFieldsTypes(){
        return array('text','textarea','email','phone','country','password','submit','hidden');
    }

    public function location(){
        $ip = '213.136.90.209';
        //$ip = Request::ip();
        $location = file_get_contents('http://api-v2.rboptions.com/locator/'.$ip);
        echo $location;
    }

    public function postForm(){
        $res = SpotApi::sendRequest('Customer', 'add', Request::all());
        if($res['err'] === 0){
            $funnelPage = \App\Page::find(Request::get('parentPage'));
            $append = 'users.php?act=check&email='.Request::get('email').'&password='.Request::get('password');
            $res['destination'] = $funnelPage->destinationSite->get().$append;
        }

        echo json_encode($res);


        /*if($res['err'] === 0){
            echo json_encode(['err'=>0, 'redirectTo'=>'http://www.rboptions.com/users.php?act=check&email='.Request::get('email').'&password='.Request::get('password')]);
            //return redirect('http://www.rboptions.com/users.php?act=check&email='.Request::get('email').'&password='.Request::get('password'));
        }
        echo json_encode(['err'=>1, 'errs'=>$res]);
        //return Redirect::back()->withInput()->withErrors($res);*/
    }

}
