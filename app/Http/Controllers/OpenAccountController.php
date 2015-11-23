<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Page;
use App\Services\SpotApi;


class OpenAccountController extends Controller {

    //private $allowedFields;
    private static $allowedFields = [
        'FirstName',
        'LastName',
        'Country',
        'Phone',
        'email',
        'password',
        'currency',
        'customerId',
        'authKey'
    ];



	public function store(){
        $data = self::clearFields($this->preapreFields());
        dd($data);
        $ans = SpotApi::sendRequest('Customer', 'add', $data);
        if($ans['err'] === 0 && $this->verifyLogin($data)){
            $redirect = '/'.\Request::local()->code.'/'.Page::fullSlugStatic(18);
            echo json_encode(['redirect'=>$redirect]);
        } else {
            echo json_encode($ans);
        }
        die();
	}

    public static function login(){
        $data = \Request::all();
        if($ans = self::verifyLogin($data)){
            $redirect = '/'.\Request::local()->code.'/'.Page::fullSlugStatic(19);
            echo json_encode(['redirect'=>$redirect]);
        } else {
            echo json_encode($ans);
        }
    }

    public static function logout(){
        \Session::forget('spotCustomer');
        \Session::flush();
        return \Redirect::to('/');
    }

    public static function isLogged(){
        $customer = \Session::get('spotCustomer');
        if(isset($customer['isLogged']) && $customer['isLogged'] === 1){
            return true;
        }
        return false;
    }

    public static function getCustomer(){
        if(self::isLogged()){
            return \Session::get('spotCustomer');
        }
        else
            return false;
    }

    private function preapreFields(){
        $inputs = \Request::all();
        extract($inputs);
        $inputs['Phone'] = @$phone_kid.@$phone_mid.@$phone_full;
        return $inputs;
    }

    private static function clearFields($fields){
        $temp = array();
        foreach($fields as $key => $field)
            if(in_array($key, self::$allowedFields))
                $temp[$key] = $fields[$key];
        return $temp;
    }

    private static function verifyLogin($data){
        if(isset($data['email']) && isset($data['password'])) {
            $temp['FILTER']['email'] = $data['email'];
            $temp['FILTER']['password'] = $data['password'];
        }
        $ans = SpotApi::sendRequest('Customer', 'validate', $temp);
        if(isset($ans) && $ans['err'] === 0){
            return self::doLogin($ans);
        } else {
            echo json_encode($ans);
        }
        die();
    }

    private static function doLogin($data){
        if(isset($data['status']['Customer']) && !empty($data['status']['Customer'])){
            $customer = [];
            $customer['isLogged'] = 1;
            $customer['id'] = $data['status']['Customer']['data_id'];
            $customer['firstName'] = $data['status']['Customer']['data_FirstName'];
            $customer['lastName'] = $data['status']['Customer']['data_LastName'];
            $customer['balance'] = $data['status']['Customer']['data_accountBalance'];
            $customer['currency'] = $data['status']['Customer']['data_currency'];
            $customer['currencySymbol'] = self::currency2symbol($customer['currency']);

            $u['authKey'] = md5(uniqid($customer['id']));
            $u['customerId'] = $customer['id'];
            $data = self::clearFields($u);

            $ans = SpotApi::sendRequest('Customer', 'edit', $data);
            if($ans['status']['operation_status'] == 'successful'){
                $customer['authKey'] = $ans['status']['Customer']['data_authKey'];
                $customer['authKeyExpiry'] = $ans['status']['Customer']['data_authKeyExpiry'];
            }

            \Session::put('spotCustomer', $customer);
            return true;
        }
        else return false;
    }


    public static function currency2symbol($currency){
        switch ($currency){
            case "USD": return "$"; break;
            case "EUR": return "€"; break;
            case "GBP": return "£"; break;
            default: return "$"; break;
        }
    }
}
