<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 4/6/2016
 * Time: 12:46 PM
 */

namespace App\Services;

class EmsLog
{
    public static function log($level, $subject, $message){
        Curl::post('http://146.185.144.129/log/blablapassword', [
            'level'=>$level,
            'subject'=>$subject,
            'message'=>$message,
            'brand'=>'funnels'
        ], 'json');
    }
}

