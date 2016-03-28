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
        $response['avatarsText']    = $content['global'];

        if(!$response['countryCode']) {
            $response['countryCode'] = 'uk';
            $response['countryName'] = 'united kingdom';
        }

        foreach($content as $country => $data) {
            $codes = explode('_',$country);
            if(in_array($response['countryCode'],$codes)) {
                $response['content'] = $content[$country];
                break;
            }
        }

        if(!isset($response['content'])) {
            $response['content'] = $content['be_cz_fr_de_it_nl_no_pl_es_sz'];
        }

        return response()->json($response);
    }

}
