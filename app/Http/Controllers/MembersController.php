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

        if(IpLog::count(\Request::ip(), 'createAccount') || $page->getParent()->switches->showCaptcha){
            $this->show_recaptcha = 1;
        }
        return parent::index($page);
    }

}
