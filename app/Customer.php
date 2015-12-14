<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 10/12/2015
 * Time: 11:03
 */

namespace App;

use App\Services\SpotApi;
use Log;
use URL;

class Customer
{

    private static $instance;
    public $isLogged = false;
    public $id;
    public $firstName;
    public $lastName;
    public $financial = array(
        'balance' => null,
        'currency' => null,
        'currencySymbol' => null
    );
    public $auth = [
        'authKey'=>null,
        'authKeyExpiry'=>null
    ];
    public $language = [
        'code' => 'EN'
    ];

    public static function get($arg=null){

        if(!self::$instance)
            self::$instance = \Session::get('spotCustomer');
        if(!self::$instance)
            self::$instance = new self();

        if($arg === null)
            return self::$instance;
        return self::$instance->$arg;
    }

    public function __get($key){
        return self::get()->$key;
    }

    private function setup($data){
        $currencySymbol = [
            'USD' => '$',
            'EUR' => '&#8364;',
            'GBP' => '&#163;'
        ];
        if(isset($data['status']['Customer']) && !empty($data['status']['Customer'])){
            $data               = $data['status']['Customer'];
            $this->id           = $data['data_id'];
            $this->firstName    = $data['data_FirstName'];
            $this->lastName     = $data['data_LastName'];
            $this->language     = ['code' => \Request::local()->code];
            $this->financial    = [
                'balance' => $data['data_accountBalance'],
                'currency' => $data['data_currency'],
                'currencySymbol' => $currencySymbol[$data['data_currency']] // this should be handled externally
            ];
            $this->setSpotAuthToken();
            $this->isLogged = true;
            return $this;
        }
        else return $data;
    }

    public static function isLogged(){
        return self::get()->isLogged;
    }

    public static function login($data){
        $ans = self::verifyLogin($data);
        if(isset($ans) && $ans['err'] === 0){
            self::get()->setup($ans);
            \Session::put('spotCustomer', self::get());
            \Session::save();
            return self::get();
        }
        return json_encode($ans);
    }

    private static function verifyLogin($data){
        $temp = [];
        if(isset($data['email']) && isset($data['password'])) {
            $temp['FILTER']['email'] = $data['email'];
            $temp['FILTER']['password'] = $data['password'];
        }
        return SpotApi::sendRequest('Customer', 'validate', $temp);
    }


    public static function logout(){
        foreach ( $_COOKIE as $key => $value ) {
            setcookie( $key, null, -1, '/', '.rboptions.com' );
        }
        \Session::set('spotCustomer', new Customer([]));
        \Session::flush();
    }

    private function setSpotAuthToken(){
        $authKey = md5(uniqid($this->id));
        //$u['customerId'] = $customer['id'];
        //$data = self::clearFields($u);
        $ans = SpotApi::sendRequest('Customer', 'edit', ['authKey'=>$authKey, 'customerId'=>$this->id]);
        if($ans['status']['operation_status'] == 'successful'){
            $this->auth = [
                'authKey' => $ans['status']['Customer']['data_authKey'],
                'authKeyExpiry' => $ans['status']['Customer']['data_authKeyExpiry']
            ];
        }else{
            Log::error('Failed to set Spot auth token', $ans);
        }
    }

}

/*
$c = Customer::get();
$c->isLogged;

Customer::isLogged(); customer_is_logged();
Customer::Country(); get_customer_balance();
Customer::Balance();
*/