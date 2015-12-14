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

            // From server
            $data['method'] = 'creditCard';
            $data['customerId'] = Customer::get('id');
            $data['fundId'] = '-1';                          // new card maybe ? -> could be from session
            $data['Country'] = \Request::get('country_id');; // Could be from IP
            $data['currency'] = 'USD';                       // need to be from server

            // from request
            $data['cardType'] = \Request::get('card_type');
            $data['cardNum'] = \Request::get('card_number');
            $data['ExpMonth'] = \Request::get('expires_month');
            $data['ExpYear'] = \Request::get('expires_year');
            $data['CVV2/PIN'] = \Request::get('cvv');
            $data['FirstName'] = \Request::get('first_name');
            $data['LastName'] = \Request::get('last_name');
            $data['Address'] = \Request::get('address');
            $data['City'] = \Request::get('city');
            $data['postCode'] = \Request::get('zip_code');
            $data['amount'] = \Request::get('amount');
            $data['Phone'] = \Request::get('phone');;

            // do we need those?
            //$data['email'] = \Request::get('email');
            //$data['State'] = 'NY';


            //dd(\Request::all());
            $ans = SpotApi::sendRequest('CustomerDeposits', 'add', $data);
            echo json_encode($ans);

        }
        dd('not logged in');
    }

}
