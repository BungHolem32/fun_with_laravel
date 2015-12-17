<?php namespace App\Http\Controllers;

use App\Bot;
use App\Customer;
use App\Http\Requests;
use App\Languages;
use App\mongo;
use App\Services\SpotApi;
use App\Services\MailVerify;
use Request;
use Log;


//use App\Lib\Mixpanel\Mixpanel;


class PanelController extends Controller {

    public function index($page){
        return parent::index($page)->with('bot_settings', Bot::create(Customer::get(), false)->getSettings());
    }

    public function getPageLayouts(){
        $temp = [];
        foreach(\File::files(base_path().'/resources/views/panels/panel-layout') as $pageLayout){
            $exo = explode('/', $pageLayout);
            $cont = str_replace('.blade.php', '', end($exo));
            //if($cont != 'Controller')
            $temp[$cont] = $cont;
        }
        return $temp;
    }

    public function refresh(){
        if(Customer::isLogged()){

            // Get Customer Balance.
            $batch[] = [
                'MODULE'    => 'Customer',
                'COMMAND'   => 'view',
                'FILTER'   => ['id'=>Customer::get()->id],
            ];

            // Get Customer Positions.
            $batch[] = [
                'MODULE'    => 'Positions',
                'COMMAND'   => 'view',
                'FILTER'   => ['customerId'=>Customer::get()->id],
            ];

            $ans = SpotApi::sendBatch($batch);
            $customer = $ans['BATCH_0']['Customer']['data_0'];
            $positions = $ans['BATCH_1']['Positions'];
            echo json_encode(['err'=>0, 'positions'=>$positions, 'customer'=>$customer]);
        }
    }


    public function deposit(){
        if(Customer::isLogged()){

            // From server
            $data['method'] = 'creditCard';
            $data['customerId'] = Customer::get('id');
            $data['fundId'] = '-1';                         // new card maybe ? -> could be from session
            $data['Country'] = \Request::get('country_id'); // Could be from IP
            $data['currency'] = Customer::get('currency');  // need to be from server

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
            $data['email'] = \Request::get('email');

            // do we need those?
            //$data['State'] = 'NY';


            //dd(\Request::all());
            $ans = SpotApi::sendRequest('CustomerDeposits', 'add', $data);
            echo json_encode($ans);

        }
    }


    public function botOn(){
        if(Customer::isLogged()){
            return Bot::create(Customer::get())->turnOn();
        }
        else{
            echo json_encode(['err'=>1, 'errs'=>['error'=>Languages::getTrans('Insufficient Funds, make a new deposit.')]]);
        }
    }

    public function botOff()
    {
        if (Customer::isLogged()) {
            return Bot::create(Customer::get(),false)->turnOff();
        }
        return ['err' => 1, 'errs' => ['notLoggedIn']];
    }

    public function runBot(){
        $results = [];
        $customers = \DB::select('select customer_id from `bot` where `status` = "On"');
        Log::debug('bot - found customers', $customers);
        foreach($customers as $customer){
            try {
                $customer = Customer::load($customer->customer_id);
            }catch(\Exception $e){
                Log::error($e);
                continue;
            }
            $results[] = Bot::create($customer, false)->placeOptions();
        }
        return $results;
    }

    public function setBotRange(){
        $min = (int)\Request::input('min');
        $max = (int)\Request::input('max');

        if($min < Bot::defaultMin)
            $min = BOT::defaultMin;
        if($max > Bot::Max)
            $max = Bot::Max;

        Bot::create(Customer::get())->setRange($min, $max);
        return ['err' => 0];
    }

}
