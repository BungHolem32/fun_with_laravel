<?php namespace App\Http\Controllers\Ajax;

use App\Http\Requests;

class ZulanderController extends \App\Http\Controllers\Base\AbstractFunnelController {

    public function getUserContent() {
        $locationContent    = null;
        $response           = [];

        $content                    = json_decode(file_get_contents(url("/js/zulander/content.json")),true);
        $loc                        = \App\Services\Location::getByUserIp();
        $response['countryCode']    = strtolower($loc['iso']);
        $response['countryName']    = strtolower($loc['countryName']);
        $response['avatarsText']    = $content['global']['stories'];

        if(!$response['countryCode'] ||  $response['countryCode'] == '-') {
            $response['countryCode'] = 'gb';
            $response['countryName'] = 'united kingdom';
        }

        foreach($content['traders'] as $country => $data) {
            $codes = explode('_',$country);
            if(in_array($response['countryCode'],$codes)) {
                $response['traders'] = $content['traders'][$country];
                break;
            }
        }

        if(array_key_exists($response['countryCode'],$content)) {
            $response['content'] = $content[$response['countryCode']];
        }
        else {
            $response['countryCode']    = 'gb';
            $response['countryName']    = 'united kingdom';
            $response['traders']        = $content['au_nz_gb_ca_sa'];
            $response['content']        = $content['gb'];
        }
        return response()->json($response);
    }
}
