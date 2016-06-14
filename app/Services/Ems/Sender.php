<?php
/**
 * Created by PhpStorm.
 * User: ronenk
 * Date: 3/28/2016
 * Time: 10:42 AM
 */
namespace App\Services\Ems;

class Sender
{
    private $url;
    private $brand;
    private $emails = array();
    private $sent = false;

    /**
     * Ems constructor.
     * @param String $url Link to the email sending system
     * @param String $password
     * @param String $brand
     */
    public function __construct($url, $password, $brand){
        $this->url = $url . "/" . $password;
        $this->brand = $brand;
    }

    public function addEmailToQueue(StandardEmail $emailObj) {
        $this->sent = false;
        $this->emails[] = $emailObj->toArray();
    }

    public function commit($sendNow = false) {

        $this->sent = true;

        if (count($this->emails) == 0) {
            return '{"err":1,"errors":["No emails to send!"],"result":[]}';
        }
        $query = ($sendNow ? "sendNow=1" : "") . "brand=".urlencode($this->brand)."&emails=". json_encode($this->emails);

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $this->url);
        curl_setopt($ch,CURLOPT_POST, 2);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        if (!$result) {
            return '{"err":1,"errors":["CURL error!"],"result":[]}';
        }

        return $result;
    }

    function __destruct() {
        if (!$this->sent) $this->commit();
    }
}