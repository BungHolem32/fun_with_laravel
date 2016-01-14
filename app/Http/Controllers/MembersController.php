<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\mongo;
use Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Base;

class MembersController extends Base\AbstractFunnelController {

    public function index($page)
    {
        $set_captcha = (bool)\Session::get('recaptcha');
        $this->form = \App\Page::find($page->formType);
        if(isset($this->form->switches->recaptcha) && !empty($this->form->switches->recaptcha) && ($this->form->switches->recaptcha-1) <= IpLog::count(\Request::ip(), 'createAccount')){
            $this->show_recaptcha = true;
            $set_captcha = true;
        }
        \Session::put('recaptcha',$set_captcha);
        return parent::index($page);
//dd(Request::all());
// GET
    }

}
