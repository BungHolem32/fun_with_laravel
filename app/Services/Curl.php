<?php

namespace App\Services;

class Curl
{

    private $curl;
    private $url;
    private $type = 'post';

    public function __construct(){
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, false); // don't check certificate
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false); // don't check certificate
    }

    public static function post($url, $data, $type='post'){
        $c = new self();
        $c->method($type);
        $c->url($url);
        $c->data($data);
        return $c->send();
    }

    public static function get($url, $data){
        $c = new self();
        $c->method('get');
        $c->url($url);
        $c->data($data);
        return $c->send();
    }

    public function url($url){
        $this->url = $url;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        return $this;
    }

    public function method($method){
        $this->type = $method;
        if($method == 'post'){
            curl_setopt($this->curl, CURLOPT_POST, true);
        }
        if($method == 'json'){
            curl_setopt($this->curl, CURLOPT_HTTPHEADER, ['Content-type: application/json']);
            curl_setopt($this->curl, CURLOPT_POST, true);
        }
    }

    public function data($data){
        switch($this->type){
            case 'get':
                $connect = '?';
                if(strpos($this->url, '?'))
                    $connect = '&';
                $this->url($this->url.$connect.http_build_query($data));
                break;
            case 'post':
                $post_data = [];
                foreach($data as $k=>$v)
                    $post_data[str_replace(' ', '%20', $k)] = $v;
                curl_setopt($this->curl, CURLOPT_POSTFIELDS, $post_data);
                break;
            case 'json':
                curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($data));
                break;
        }
        return $this;
    }

    public function send(){
        return curl_exec($this->curl);
    }

}
