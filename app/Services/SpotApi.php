<?php namespace App\Services;


use App\Languages;
use Log;

class SpotApi
{

    const TIMEOUT = 60;

    private static $apis = [
        'rboptions.com' => ['api_username'=> 'Sitev2', 'api_password'=>'56c09fc848049', 'api_url'=>'http://api-v2.rboptions.com/api'],
        'skylinemarkets.com' => ['api_username'=> 'funnels_sky', 'api_password'=>'8bBXMytl66', 'api_url'=>'http://api.skylinemarkets.com/api']
    ];

    public static function sendRequest($module=null, $command=null, $data, $jsonResponse = 'true')
    {
        if($module !== null)  $data['MODULE']  = $module;
        if($command !== null) $data['COMMAND'] = $command;
        $data = array_merge($data, self::getApiDetails(['api_username', 'api_password']));

        $data['jsonResponse'] = $jsonResponse;

        if(in_array('before'.$module.$command, get_class_methods(get_class()))){
            $method = 'before'.$module.$command;
            $data = self::$method($data);
        }
        //dd($data);
        return self::processAnswer(self::initCurl($data));
    }

    public static function sendBatch($data)
    {
        $temp=[]; $i=0;
        if(!empty($data)){
            foreach($data as $option){
                foreach($option as $key => $val){
                    $temp['BATCH['.$i.']['.$key.']'] = $val;
                }
                $i++;
            }
        }
        return self::sendRequest(null, null, $temp);
    }

    private static function initCurl($data)
    {
        $ch = curl_init(self::getApiDetails('api_url'));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_INTERFACE, $_SERVER["SERVER_ADDR"]);
        curl_setopt($ch, CURLOPT_TIMEOUT, self::TIMEOUT);

	    curl_setopt($ch, CURLOPT_VERBOSE, true);


        $result = curl_exec($ch);
        return $result;
    }


    private static function processAnswer($answer){
        $answer = json_decode($answer,true);
        $answer['err'] = 1;
        if(isset($answer['status']) && isset($answer['status']['connection_status']) && $answer['status']['connection_status'] == 'successful'){
            // batch operation - prepare parent values from all batches
            if(array_key_exists('BATCH_0', $answer)){
                $answer['status']['errors'] = [];
                $answer['status']['operation_status'] = 'successful';
                foreach($answer as $k => $a){
                    if(strpos( $k, 'BATCH') !== 0) continue; // only read records with 'BATCH_' keys
                    if(array_key_exists('errors', $a))
                        $answer['status']['errors'] += $a['errors'];
                    if($a['operation_status'] != 'successful')
                        $answer['status']['operation_status'] = $a['operation_status'];
                }
            }

            if($answer['status']['operation_status'] == 'successful'){
                $answer['err'] = 0;
                return $answer;
            }
            $errs = ['error' => array_map(function($e){
                if(is_array($e))
                    return Languages::getTrans(array_values($e)[0]);
                return Languages::getTrans($e);
            }, self::getErrorTexts($answer['status']['errors']))];
            $answer['msg'] = 'Operation Failed!';
            $answer['errs'] = $errs;
            return $answer;
        }
	    Log::debug('Spot Error', $answer);
        $answer['errs']['error'] = $answer['msg'] = 'Error - Connection was not established.';
        return $answer;
    }

    private static function getErrorTexts($data, $key=""){
        $errors = [];
        if(is_array($data)) {
            foreach($data as $key => $node) {
                $errors = array_merge($errors,self::getErrorTexts($node, $key));
            }
        }
        else {
            if(!is_numeric($data[0])) { // we will only show text messages, no numbers. This is meant to avoid showing any IP addresses to users
                $errors[] = $data;
            }
        }
        return $errors;
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
        //$location = json_decode(file_get_contents('http://api-v2.rboptions.com/locator/'.\Request::ip()));
        $location = json_decode(file_get_contents('http://locator.rboptions.com/locator/'.\Request::ip()));
        $newData['registrationCountry']=$location->countryId;

        return $newData;
    }

    private static function getApiDetails($keys=null){
        $domain = Domains::getDestination();
        $data = self::$apis[self::$domains_api[$domain]];
        if($keys){
            if(!is_array($keys)) {
                $data = $data[$keys];
            }else{
                $data = array_intersect_key($data, array_flip($keys));
            }
        }
        return $data;
    }
}

