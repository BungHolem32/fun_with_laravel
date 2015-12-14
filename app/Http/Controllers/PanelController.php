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


        if(Customer::isLogged()){

            // Get Customer Positions.
            $data['FILTER']['customerId']= Customer::get()->id;
            $ans = SpotApi::sendRequest('Positions', 'view', $data);
            echo json_encode(['err'=>0, 'positions'=>$ans]);
            //dd($ans);

            //Get Customer History Trades.
            /*$data['FILTER']['customerId'] = Customer::get()->id;
            $data['FILTER']['NOT']['status'][0] = 'open';
            $ans = SpotApi::sendRequest('Positions', 'view', $data);
            dd($ans);*/
        }



    }

}
