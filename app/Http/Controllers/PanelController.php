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

            /*echo '{"err":0,"customer":{"id":"315085","FirstName":"Rotem","LastName":"Grimberg","gender":"male","email":"rotemg@rboptions.com","password":"fbf8529864fabe8f7bdee93e1e800051","cellphone":"","phone":"61","fax":"","specialAccountNumber":"","personalId":"","firstDepositDate":"0000-00-00","Country":"Australia","registrationCountry":"Canada","City":"","state":"","newCustomer":"1","street":"","houseNumber":"","aptNumber":"","risk":"low","callBackTime":"00:00:00","verification":"None","referLink":"","siteLanguage":"en","customerSelectedLang":"en","timezone":"","promotionalEmails":"0","tradingEmails":"0","employeeInChargeId":"24","employeeInChargeName":"Demo  Department ","type":"customer","approvesEmailAds":"0","campaignId":"96","campaignName":"DEV TEST DO NOT TOUCH","birthday":"1974-10-10","lastLoginDate":"PM 01:29 17\/12\/15","subCampaignId":"0","subCampaignParam":"-","regTime":"2015-07-20 10:41:36","regTimeFormatted":"AM 10:41 20\/07\/15","lastTimeActive":"PM 01:29 17\/12\/15","lastTimeActiveNoFormat":"2015-12-17 13:29:08","lastUpdate":"PM 01:29 17\/12\/15","regStatus":"activated","postCode":"","accountBalance":"2.63","saleStatus":"noCall","leadStatus":"new","regulateStatus":"none","isSuspended":"0","isBlackList":"0","pnl":"-710.29998779","currencySign":"$","currency":"USD","isLead":"0","a_aid":"","a_bid":"","a_cid":"","isDemo":"1","VIPGroup":"Regular","group":"","potential":"","affiliateId":"0","regIP":"","accumulatedFtd":0}}';
            die();*/
            $ans = SpotApi::sendBatch($batch);
            $customer = $ans['BATCH_0']['Customer']['data_0'];
            $positions = [];
            if(array_key_exists('Positions', $ans['BATCH_1'])){
                $positions = $ans['BATCH_1']['Positions'];
            }
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

            // Testing for Ip change
            $data['IPAddress'] = \Request::ip();

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

    public function debug(){
        dd(Customer::get());
    }
}
