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

        \Session::forget('SMS_CODE');
        \Session::forget('smsLog');

        if(IpLog::count(\Request::ip(), 'createAccount') || $page->getParent()->switches->showCaptcha === "1")
            $this->show_recaptcha = true;
        else
            $this->show_recaptcha = false;

        return parent::index($page);
    }

}
