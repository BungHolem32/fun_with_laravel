<?php namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests;
use App\mongo;
use App\Services\SpotApi;
use App\Services\MailVerify;
use Request;


//use App\Lib\Mixpanel\Mixpanel;


class PanelController extends Controller {

    public function getPageLayouts(){
        $temp = [];
        foreach(\File::files(base_path().'/resources/views/funnels/layouts/panel-layout') as $pageLayout){
            $exo = explode('/', $pageLayout);
            $cont = str_replace('.blade.php', '', end($exo));
            //if($cont != 'Controller')
            $temp[$cont] = $cont;
        }
        return $temp;
    }


    public function refresh(){
        //dd(\Customer::get());

        // TODO: load all the stuff from spot.

        // Get Customer Positions.
        if(Customer::isLogged()){
            $data['FILTER']['customerId']= Customer::get()->id;
            //SpotApi::sendRequest('Positions', 'view', '[customerId]=108');
            dd(Customer::get()->id);
        }



        // Get Customer Balance.


        //Get Customer History Trades
    }

}
