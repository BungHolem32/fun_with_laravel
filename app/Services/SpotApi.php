<?php namespace App\Services;


use App\Languages;

class SpotApi
{

    /*
    const ourApiUsername = 'funnels';
    const ourApiPassword = '5648ac05c4849';
    */
    const ourApiUsername = 'Sitev2';
    const ourApiPassword = '559152ad63f5c';
    //const API_URL = "http://api-spotplatform.rboptions.com/api";
    const API_URL = "http:/api-v2.rboptions.com/api";

    const TIMEOUT = 60;

    public static function sendRequest($module=null, $command=null, $data, $jsonResponse = 'true')
    {
        if($module !== null)  $data['MODULE']  = $module;
        if($command !== null) $data['COMMAND'] = $command;
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
        //d($temp);
        //dd(http_build_query($temp));
        return self::sendRequest(null, null, $temp);
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
        //echo ($result);
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
            $errs = array_map(function($e){
                if(is_array($e))
                    return Languages::getTrans(array_values($e)[0]);
                return Languages::getTrans($e);
            }, $answer['status']['errors']);
            $answer['msg'] = 'Operation Failed!';
            $answer['errs'] = $errs;
            return $answer;
        }
        $answer['errs']['error'] = $answer['msg'] = 'Error Connection was not established.';
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
