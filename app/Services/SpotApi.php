<?php namespace App\Services;


use App\Languages;

class SpotApi
{

    const ourApiUsername = 'funnels';
    const ourApiPassword = '5648ac05c4849';
    const API_URL = "http://api-spotplatform.rboptions.com/api";
    //const API_URL = "http://www.walla.co.il";

    const TIMEOUT = 60;

    public static function sendRequest($module, $command, $data, $jsonResponse = 'true')
    {
        $data['MODULE']  = $module;
        $data['COMMAND'] = $command;
        $data['api_username'] = self::ourApiUsername;
        $data['api_password'] = self::ourApiPassword;

        $data['jsonResponse'] = $jsonResponse;

        if(in_array('before'.$module.$command, get_class_methods(get_class()))){
            $method = 'before'.$module.$command;
            $data = self::$method($data);
        }
        //dd($data);
        return self::processAnswer(self::initCurl($data));
    }

    private static function initCurl($data)
    {
        $ch = curl_init(self::API_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_INTERFACE, $_SERVER["SERVER_ADDR"]);
        curl_setopt($ch, CURLOPT_TIMEOUT, self::TIMEOUT);
        $result = curl_exec($ch);
        return $result;
    }


    private static function processAnswer($answer){
        $answer = json_decode($answer,true);
        $answer['err'] = 1;
        if($answer['status']['connection_status'] == 'successful'){
            if($answer['status']['operation_status'] == 'successful'){
                $answer['err'] = 0;
                return $answer;
            }
            $errs = array_map(function($e){return Languages::getTrans($e);}, $answer['status']['errors']);
            $answer['msg'] = 'Operation Failed!';
            $answer['errs'] = $errs;
            return $answer;
        }
        $answer['msg'] = 'Error Connection was not established.';
        return $answer;
    }


    private static function beforeCustomeradd($data){


        if (isset($data['p'])) $param = $data['p'];
        if (isset($data['param'])) $param = $data['param'];
        if (isset($data['bfptag'])) $param = $data['bfptag'];
        if (isset($data['ctag'])) $param = $data['ctag'];

        $newData['subCampaign'] = (isset($param)) ? $param : '';//$data['param'];

        $newData['Phone'] = $data['prefix'].$data['phone'];
        $newData['gender'] = 'male';
        $newData['birthday'] = '1974-10-10';

        $newData['campaignId'] = isset($data['campaign']) ? $data['campaign'] : "29";
        //if(isset($data['campaign']))
        //    $newData['campaignId'] = $data['campaign'];

        if(isset($data['aff_id']))
            $newData['a_id'] = $data['aff_id'] ;

        $omitArray = ['_token', 'prefix', 'phone', 'param', 'bfptag', 'p', 'ctag', 'campaign', 'aff_id'];
        foreach($data as $key => $value){
            if(!in_array($key, $omitArray))
            $newData[$key] = $value;
        }

        //dd($newData);
        $location = json_decode(file_get_contents('http://api-v2.rboptions.com/locator/'.\Request::ip()));
        $newData['registrationCountry']=$location->countryId;

        return $newData;
    }
}
