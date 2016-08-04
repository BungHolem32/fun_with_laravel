<?php namespace App\Http\Controllers;

use App\Http\Middleware\Recaptcha;
use App\Services\NexmoSmsApi;

define("MAX_SMS_SENT_PER_PHONE", 3);
define("MAX_WRONG_CODES_TRIED", 3);

class SmsController extends Controller {


    public function sendSMS()
    {

        $phone = \Request::get('phone');
        $name = \Request::get('name');

        if (!ctype_digit($phone)) {
            echo(json_encode(['err' => 1, 'errs' => ['error' => 'Wrong number!', 'action'=>'stay']])); // error during SMS sending
            return;
        }

        $smsLog = \Session::has('smsLog') ? \Session::get('smsLog') : array('phone'=>'', 'sms'=>0, 'wrong_codes'=>0);

        if ($smsLog['sms'] > MAX_SMS_SENT_PER_PHONE - 1) {
            echo(json_encode(['err' => 1, 'errs' => ['error' => 'Too many sms sent!', 'action'=>'reload']]));
            return;
        }

        if ($smsLog['phone'] != $phone && $smsLog['phone'] != '') {
                echo(json_encode(['err' => 1, 'errs' => ['error' => 'Updated phone number!', 'action'=>'reload']])); // error during SMS sending
                return;
        } else {
            if ($smsLog['phone'] == '') {
                if (\Session::get('showRecaptcha')) {
                    if (!Recaptcha::validateCaptcha()) {
                        echo(json_encode(['err' => 1, 'errs' => ['error' => 'Please fill captcha!', 'action' => 'stay']])); // error during SMS sending
                        return;
                    } else {
                        \Session::set('captchaTrue', true);
                    }
                }
                $smsLog['phone'] = $phone;
                \Session::set('smsLog', $smsLog);
            }
        }

        \Session::forget('SMS_CODE');
        $code = rand (1000,9999);
        \Session::set('SMS_CODE', $code);

        $text = "Hello ".$name . ", " .$code . " is your verification code.";
        $res = NexmoSmsApi::sendSMS(['from'=>'Your Code', 'to'=>$phone, 'text'=>$text]);

        if ($res === false) {
            die(json_encode (['err'=>1, 'errs'=>['error'=>'Error while sending SMS to '.$phone, 'action'=>'stay']])); // error during SMS sending
        }
        
        $res = json_decode($res);

        /*
            object(stdClass)[255]
            public 'message-count' => string '1' (length=1)
            public 'messages' =>
            array (size=1)
            0 =>
            object(stdClass)[256]
            public 'to' => string '972544516737' (length=12)
            public 'message-id' => string '02000000C06B28F2' (length=16)
            public 'status' => string '0' (length=1)
            public 'remaining-balance' => string '1.68800000' (length=10)
            public 'message-price' => string '0.01040000' (length=10)
            public 'network' => string '42501' (length=5)
        */



        if ($res->messages[0]->status != 0) {
            echo(json_encode (['err'=>1, 'errs'=>['error'=>'Error while sending SMS to '.$phone, 'action'=>'stay']])); // error during SMS sending
            return;
        }

      /*
      "message-count": "1",
      "messages": [{
          "to": "972544516737",
          "message-id": "03000000D8FD8FC0",
          "status": "0",
          "remaining-balance": "1.97920000",
          "message-price": "0.01040000",
          "network": "42501"
      }]
      */

        $smsLog['sms']++;
        \Session::set('smsLog', $smsLog);

        echo(json_encode (['err'=>0, 'message'=>'ok']));
    }

    public function validateSmsCode() {
        $code = \Session::get('SMS_CODE');

        if (empty($code)) {
            echo(json_encode (['err'=>1, 'errs'=>['error'=>'Code is not in SESSION error!', 'action'=>'stay']]));
            \Log::error('Code is not in SESSION error!', []);
            return;
        }

        if ($code == \Request::get('code')) {
            \Session::set('SMS_CODE', 'VERIFIED');
            echo(json_encode (['err'=>0, 'message'=>'ok']));
            return;
        } else {
            $smsLog = \Session::has('smsLog') ? \Session::get('smsLog') : array('phone'=>'', 'sms'=>0, 'wrong_codes'=>0);
            $smsLog['wrong_codes']++;
            \Session::set('smsLog', $smsLog);

            if ($smsLog['wrong_codes'] > MAX_WRONG_CODES_TRIED) {
                echo(json_encode(['err' => 1, 'errs' => ['error' => 'Too many failed attempts!', 'action'=>'reload']]));
                return;
            }
        }

        echo(json_encode (['err'=>1, 'errs'=>['error'=>'Wrong code, click submit to resend the code!']]));

    }

    public static function isSmsVerified() {
        $code = \Session::get('SMS_CODE');
        return $code == 'VERIFIED';
    }


}
