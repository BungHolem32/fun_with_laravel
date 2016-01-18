<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\mongo;
use Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Base;
use App\IpLog;

class MembersController extends Base\AbstractFunnelController {

    public function index($page)
    {
        $recaptcha = $page->switches->recaptcha;
        if($recaptcha instanceof mongo) $recaptcha = null;
        if($recaptcha != null && intval($page->switches->recaptcha) <= IpLog::count(\Request::ip(), 'createAccount')){
            $this->show_recaptcha = true;
        }
        return parent::index($page);
    }

}
