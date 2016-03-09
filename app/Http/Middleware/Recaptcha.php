<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 1/14/2016
 * Time: 5:34 AM
 */

namespace App\Http\Middleware;

use App\IpLog;
use App\Languages;
use Closure;

class Recaptcha
{
    public static $secret = '6Ld39RMTAAAAAPZmYhrvY0sZ1FpwcFSC0oXf9jTn';

    public function handle($request, Closure $next){
        if(IpLog::count(\Request::ip(), 'createAccount')) {
            if(!self::validateCaptcha()){
                //Response::header('HTTP/1.1 403 Incorrect Captcha');
                return response(['err'=>1, 'errs'=>['error'=>Languages::getTrans('Incorrect Captcha')]], 200);
            }
        }
        return $next($request);
    }

    public static function validateCaptcha() {
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . self::$secret . "&response=" . \Request::get('g-recaptcha-response') . "&remoteip=" . $_SERVER['REMOTE_ADDR'];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $curlData = curl_exec($curl);
        curl_close($curl);
        $res = $curlData;
        $res = json_decode($res, true);
        return $res['success'];
    }


}