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
        $ans = Customer::login($data);
        /*if(Customer::isLogged()){
            echo json_encode(['redirect'=> self::getFirstPage()]);
        } else {
            echo json_encode($ans);
        }*/
        return \Redirect::back();
    }

    public static function ajaxLogin(){
        $data = \Request::all();
        $ans = Customer::login($data);
        if(Customer::isLogged()){
            return ['err'=>0];
        } else {
            return $ans;
        }
    }

    public static function ajaxLogout(){
        Customer::logout();
        return ['msg' => 'loggedout'];
    }

    public static function logout(){
        Customer::logout();
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

    public static function getFirstPage(){
        /*if(Customer::get()->financial['balance']){
            // 19 is trade page
            // 30 is the page id for credit page
            $redirect = '/'.\Request::local()->code.'/'.Page::fullSlugStatic(19);
            //$redirect = URL::route('trade', ['lang'=>$this->language['code']]);
        }else{
            $redirect = '/'.\Request::local()->code.'/'.Page::fullSlugStatic(30);
            //$redirect = URL::route('deposit/credit', ['lang'=>$this->language['code']]);
        }
        return $redirect;*/
    }
}
