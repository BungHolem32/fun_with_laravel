<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Languages;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;

class UsersController extends Controller {

    use AuthenticatesAndRegistersUsers;

    /**
     * The registrar implementation.
     *
     * @var \Illuminate\Contracts\Auth\Registrar
     */
    protected $registrar;


    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->redirectPath = '/admin/users';
        $this->middleware('guest', ['only' => 'getLogout']);
    }



	public function getIndex()
	{
        return view('admin.users.index');
	}



    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Request|\Illuminate\Http\Request|\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->registrar->validator($request->all());
        if ($validator->fails())
        {
            $this->throwValidationException(
                $request, $validator
            );
        }
        //$this->auth->login($this->registrar->create($request->all()));
        $temp = $this->registrar->create($request->all());
        \Session::flash('flash_msg', ['success', $temp->name .' was Added.']);
        return redirect($this->redirectPath());
    }


    public function getDelete($id)
    {
        $temp = User::findOrFail($id);
        if(User::destroy($id))
            \Session::flash('flash_msg', ['success', $temp->name .' was deleted.']);
        return redirect($this->redirectPath());
    }

    public function getEdit($id)
    {
        $edit = User::findOrFail($id);
        return view('auth.register', compact('edit'));
    }
    public function postEdit(Request $request)
    {
        $validator = $this->registrar->validator($request->all());
        if ($validator->fails())
        {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $temp = $this->registrar->update($request->all());
        \Session::flash('flash_msg', ['success', $temp->name .' was Updated.']);
        return redirect($this->redirectPath());
    }

}
