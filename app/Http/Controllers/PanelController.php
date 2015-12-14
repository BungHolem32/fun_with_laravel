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

        if(Customer::isLogged()){

            // Get Customer Balance.
            $customerData['FILTER']['id']= Customer::get()->id;
            $customer = SpotApi::sendRequest('Customer', 'view', $customerData);

            // Get Customer Positions.
            $positionsData['FILTER']['customerId']= Customer::get()->id;
            $positions = SpotApi::sendRequest('Positions', 'view', $positionsData);

            echo json_encode(['err'=>0, 'positions'=>$positions, 'customer'=>$customer]);
        }
    }


    public function deposit(){

        if(Customer::isLogged()){

            $data['method'] = 'creditCard';
            $data['customerId'] = '12';
            $data['fundId'] = '-1';
            $data['cardType'] = '3';
            $data['cardNum'] = '4580100010011002';
            $data['ExpMonth'] = '06';
            $data['ExpYear'] = '2017';
            $data['CVV2/PIN'] = '1234';
            $data['FirstName'] = 'lior';
            $data['LastName'] = 'Test';
            $data['Address'] = 'street50';
            $data['City'] = 'Petahtiqwa';
            $data['postCode'] = '4000';
            $data['Country'] = '120';
            $data['State'] = 'NY';
            $data['Phone'] = '0333313';
            $data['currency'] = 'USD';
            $data['amount'] = '300';

            $ans = SpotApi::sendRequest('CustomerDeposits', 'add', $data);
            dd($ans);

        }
        dd('not logged in');
    }

}
