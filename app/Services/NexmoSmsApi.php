<?php
/**
 * Created by PhpStorm.
 * User: ronenk
 * Date: 2/24/2016
 * Time: 11:31 AM
 */
namespace App\Services;

class NexmoSmsApi
{
    private static $api_key = '608db308';
    private static $api_secret = 'd9c0d7f5de4474b6';

    public static function sendSMS(array $config) {
        $url = 'https://rest.nexmo.com/sms/json?' . http_build_query([
                'api_key' => self::$api_key,
                'api_secret' => self::$api_secret,
                'to' => $config['to'],
                'from' => $config['from'],
                'text' => $config['text'],
            ]);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return curl_exec($ch);
    }
}