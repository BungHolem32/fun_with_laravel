<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 1/14/2016
 * Time: 5:34 AM
 */

namespace App\Http\Middleware;

use App\Languages;
use Closure;

class Recaptcha
{

    public function handle($request, Closure $next){

            $check_recaptcha = \Session::get('recaptcha');

            if(is_null($check_recaptcha))
                return \Redirect::back()->with('error', Languages::getTrans('Cookies must be enabled to use this site.'));


            if($check_recaptcha) {
                $secret = '6Ld39RMTAAAAAPZmYhrvY0sZ1FpwcFSC0oXf9jTn';
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . \Request::get('g-recaptcha-response') . "&remoteip=" . $_SERVER['REMOTE_ADDR'];
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_TIMEOUT, 10);
                curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
                $curlData = curl_exec($curl);
                curl_close($curl);
                $res = $curlData;
                $res = json_decode($res, true);
                if(!$res['success']){
                    return ['err'=>1, 'errs'=>['error'=>Languages::getTrans('Incorrect Captcha')]];
                }
            }

            return $next($request);

    }

}