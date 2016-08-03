<?php namespace App\Services;


use Illuminate\Support\Facades\Log;
use PhpSpec\Exception\Exception;

class MailVerify
{

    const briteApiUsername = 'funnels';
    const briteApiKey = '6494349d-d042-4361-b112-99052bca4f21';
    const API_URL = "https://bpi.briteverify.com/emails.json";

    public static function verify($email)
    {
        if (!preg_match('/.*@.*\.[a-z]{2,3}/', $email)){
            return false;
        }
        return self::processAnswer(self::sendRequest($email));
    }

    private static function sendRequest($email)
    {
        $uri = '?address=' . $email . '&apikey=' . self::briteApiKey;
        $url = self::API_URL . $uri;

        $emailValidation = @file_get_contents($url);
        if ($emailValidation === false){
            Log::error('there was problem with the url');
            $emailValidation = json_encode(['status' => 'valid']);
        }
        return $emailValidation;
    }

    private static function processAnswer($answer)
    {
        $answer = json_decode($answer, true);
        if ($answer['status'] == 'valid' || $answer['status'] == 'accept_all')
            return true;
        return $answer;
    }

}
