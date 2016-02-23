<?php namespace App\Http\Controllers;

use App\Lib\Helpers\Generate;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Request;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
    protected $dirName;

    public function __construct(){
        \View::share ( 'user', \Auth::getUser());
        //throw new SpotException('');
    }

    public static function forThis($page,$method){
        if($method == 'index') { // check if user may access page, but allows admin to edit
            $domains = strval($page->domain);
            if ($domains) {
                $domains = explode(',', $domains);
                $domain = $_SERVER['HTTP_HOST'];
                if (!in_array($domain, $domains)) {
                    abort(404);
                }
            }
        }
        try {
            $controllerStr = 'App\Http\Controllers\\' . $page->controller;
            $controller = new $controllerStr();
            $page->controller = $controller;
            return $controller->$method($page);
        }catch(\Exception $e){
            return view('layouts.spoterror')->with('error', $e);
        }
    }

    protected function dirName(){
        if($this->dirName == null)
            $this->dirName = strtolower(str_replace('Controller', '', class_basename(get_class($this))));

        return 'main/'.$this->dirName;
    }


    public function index($page)
    {
        return view($this->dirName().'/index')->with('page', $page);
    }


    public function show($page)
    {
        return view('admin.showChildren')->with('page', $page);
    }


    public function edit($page)
    {
        return view($this->dirName().'/edit')->with('page', $page);
    }



    public function update($page)
    {
        $status = 1;
        $input = Request::all();


        foreach($_FILES['files']['name'] as $key=>$filename) {
            $saved_file = Generate::savePicFile($filename, $_FILES['files']['tmp_name'][$key]);
            if (!empty($saved_file)) {
                $input['mongo'][$key] = $saved_file;
            }
        }

        foreach($input['mongo'] as $key => $fieldValue) {
            //d($page->$key);
            if($page->$key = $fieldValue)
                $fields[$key] = 1;
            else{
                $fields[$key] = 0;
                $status = 0;
            }
        }

        if (Request::ajax())
        {
            return ['status'=>$status,'fields'=>$fields];
        }
        \Session::flash('flash_msg', ['success', 'All fields saved successfully']);
        return view($this->dirName().'/edit')->with('page', $page);
    }
}
