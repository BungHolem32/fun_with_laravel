<?php namespace App;

use App\Services\SpotApi;
use Log;

class Customer
{

    private static $instance;
    const cipherKey = 'rotem';
    public $isLogged = false;
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $balance;
    public $currency = 'USD';
    public $country;
    public $phone;
    public $currencySymbol = '$';
    public $authKey;
    public $authKeyExpiry;
    public $languageIso = 'EN';
    public $loginStr;

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
        $this->id           = $data['id'];
        $this->firstName    = $data['FirstName'];
        $this->lastName     = $data['LastName'];
        $this->email        = $data['email'];
        $this->languageIso  = ['code' => \Request::local()->code];
        $this->balance      = $data['accountBalance'];
        $this->currency     = $data['currency'];
        $this->country      = $data['Country'];
        $this->phone        = $data['phone'];
        $this->currencySymbol = $currencySymbol[$data['currency']]; // this should be handled externally
        //$this->loginStr = strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(self::cipherKey), 'email=rotemg@rboptions.com.com&password=123456', MCRYPT_MODE_CBC, md5(md5(self::cipherKey)))),'+/','-_');
        // dd($this->loginStr);

        //$this->setSpotAuthToken();
        //$this->isLogged = true;
        return $this;

    }

    public static function isLogged(){
        return self::get()->isLogged;
    }

    public static function login($data){
        $c = self::get();
        try{
            $c->loadCustomerData([
                'email'=>$data['email'],
                'password'=>$data['password']
            ]);
            $c->isLogged = true; // this belongs here, not in setup, so if we load() a customer we will have the data but without being logged in
            \Session::put('spotCustomer', $c);
            \Session::save();
            return $c;
        }catch(\Exception $e){
            // not logged
            return ['err'=>1, 'errs'=>['error'=>$e->getMessage()]];
        }
    }

    public static function load($customer_id){
        $c = new self();
        $c->id = $customer_id;
        $c->loadCustomerData();
        return $c;
    }

    public function loadCustomerData($filter=[]){

        if(empty($filter)){
            $filter = ['id'=>$this->id];
        }

        $data = SpotApi::sendRequest('Customer', 'view', ['FILTER'=>$filter]);
        if($data['err'] !== 0){
            throw new \Exception($data['errs']['error']);
        }
        //prepare data - view returns subarrays of customer, e.g. DATA_0=>[], DATA_1=>[]. we only have one record and need to prefix each key with data_ to be consistent with the form that 'verify' method returns

        if(array_key_exists('data_0', $data['status']['Customer'])){
            $this->setup($data['status']['Customer']['data_0']);
        }
        return $this;
    }

    public static function logout(){
        foreach ( $_COOKIE as $key => $value ) {
            setcookie( $key, null, -1, '/', '.rboptions.com' );
        }
        \Session::set('spotCustomer', new Customer([]));
        \Session::flush();
    }

    /*private function setSpotAuthToken(){
        $authKey = md5(uniqid($this->id));
        //$u['customerId'] = $customer['id'];
        //$data = self::clearFields($u);
        $ans = SpotApi::sendRequest('Customer', 'edit', ['authKey'=>$authKey, 'customerId'=>$this->id]);
        if($ans['status']['operation_status'] == 'successful'){
            $this->authKey = $ans['status']['Customer']['data_authKey'];
            $this->authKeyExpiry = $ans['status']['Customer']['data_authKeyExpiry'];
        }else{
            Log::error('Failed to set Spot auth token', $ans);
        }
    }*/

    public function getBotSettings(){
        $row = \DB::select('select * from `bot` where customer_id=?', [$this->id]);
        if($row)
            return $row[0];
        return [];
    }

    public function __wakeup(){
        $this->loadCustomerData();
    }
}

/*
$c = Customer::get();
$c->isLogged;

Customer::isLogged(); customer_is_logged();
Customer::Country(); get_customer_balance();
Customer::Balance();
*/