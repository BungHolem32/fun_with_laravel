<?php namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests;
use App\Languages;
use App\mongo;
use App\Services\SpotApi;
use App\Services\MailVerify;
use Request;


//use App\Lib\Mixpanel\Mixpanel;


class FormController extends Controller {

    const mixPanelApiKey = '34b64f3c20373ebb1d955ba2474fa420';
    const mixPanelProjectToken = 'bcf043092b46487cd826c996282bde8a';

    public function getFieldsTypes(){
        return array('text','textarea','email','phone','country','password','submit','hidden');
    }

    public function location(){
        //$ip = '213.136.90.209';
        $ip = Request::ip();
        //$ip=($_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] :
        //$_SERVER["REMOTE_ADDR"]);
        $location = file_get_contents('http://api-v2.rboptions.com/locator/'.$ip);
        echo $location;
    }

    public function postForm(){
        $res = SpotApi::sendRequest('Customer', 'add', Request::all());
        if($res['err'] === 0){
            Customer::login(\Request::all());
            $res['destination'] = $this->getDestination();
        }
        elseif($res['errs']['error'] == 'emailAlreadyExists'){
            $res['err']=0;
            $ans = (array) Customer::login(\Request::all());
            if(isset($ans['err']) && $ans['err']===1)
                \Session::flash('flashMsg', $ans['errs']['error']);
            $res['destination'] = $this->getDestination();
        }

        echo json_encode($res);
    }

    private function getDestination(){
        $funnelPage = \App\Page::find(Request::get('parentPage'));
        $destenation = $funnelPage->destinationSite->get();
        if(empty($destenation))
            $destenation = 'http://www.rboptions.com/';
        $append = '';
        if(strpos($destenation,'rboptions.com') !== false)
            $append = 'users.php?act=check&email='.Request::get('email').'&password='.Request::get('password');

        return $destenation.$append;
    }

    public function postEmailForm(){
        $res['err'] = 1;
        $res['msg'] = 'Please try again later.';

        if(Request::get('email') === null)
            $res['err'] = 0;
        else{
            // check email with brightverifey if mail exist
            $ans = MailVerify::verify(Request::get('email'));
            if($ans === true){
                // TODO: add mixpanel event fire here.
                $this->addMailToMixpanel(Request::get('email'),Request::get('pageId'));
                $res['err'] = 0;
                $res['msg'] = '';
            }
            else{
                $errMsg = isset($ans['error']) ? $ans['error'] : 'invalid email address';
                $res['errs']['error'] = $res['msg'] = Languages::getTrans($errMsg);
            }
        }

        if($res['err'] === 0)
            $res['destination'] = $this->getDestinationByPageId(Request::get('pageId'));

        echo json_encode($res);
    }

    /**
     * @param string $email
     * @param int $pageId
     * @return void
     */
    private function addMailToMixpanel($email,$pageId){
        require base_path().'/app/Lib/Mixpanel/Mixpanel.php';
        // get the Mixpanel class instance, replace with your project token
        $ip = Request::ip();
        $pageTitle = \App\Page::find($pageId)->title->get();
        $countryISO = json_decode(file_get_contents('http://api-v2.rboptions.com/locator/'.$ip),true)['iso'];

        $mp = \Mixpanel::getInstance(self::mixPanelProjectToken);
        $mp->people->set(crc32($email), array(
            '$email' 			=> $email,
            '$ip'               => $ip,
            '$country_code'     => $countryISO,
            //'campaignId' 		=> Request::get('campaign'),
            //'subCampaignId' 	=> Request::get('param'),
            'funnel' 	        => $pageTitle
        ));
    }



    private function getDestinationByPageId($pageId){
        // Get Funnel Page.
        $page = \App\Page::find($pageId);
        $append = Request::all();
        unset($append['_token']);
        unset($append['pageId']);

        // Get destenation from funnel children.

        // new code for lang support
        return '/'.session('local')->code.'/'.$page->getFirstChild()->fullSlug().'?'.http_build_query($append);
        
        // Old code
        //return '/'.Request::local()->code.'/'.$page->getFirstChild()->fullSlug().'?'.http_build_query($append).'&'.session('local')->code;
    }
}
