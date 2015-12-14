<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Page;
use App\Customer;
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
        $data = self::clearFields($this->prepareFields());
        $ans = SpotApi::sendRequest('Customer', 'add', $data);
        if($ans['err'] === 0 && $customer = $this->verifyLogin($data)){
            echo json_encode(['redirect'=>$customer->getFirstPage()]);
        } else {
            echo json_encode($ans);
        }
        die();
	}

    public static function login(){
        $data = \Request::all();
        $ans = \Customer::login($data);
        if(\Customer::isLogged()){
            echo json_encode(['redirect'=>\Customer::getFirstPage()]);
        } else {
            echo json_encode($ans);
        }
    }

    public static function ajaxLogout(){
        \Customer::logout();
        return 'loggedout';
    }

    public static function logout(){
        \Customer::logout();
        return \Redirect::to('/');
    }

    private function prepareFields(){
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

}
