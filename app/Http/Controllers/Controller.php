<?php namespace App\Http\Controllers;

use App\Lib\Helpers\Generate;
use App\Services\MobileDetect;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use PhpSpec\Exception\Exception;
use Request;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
    protected $dirName;

    public function __construct(){
        \View::share ( 'user', \Auth::getUser());
        \View::share('mobileDetect', new MobileDetect());
        //throw new SpotException('');
    }

    public static function forThis($page,$method, $nocheck=false){
        if(!$nocheck && $method == 'index' && !$page->inDomain()) { // check if user may access page, but allows admin to edit
            abort(404);
        }
        try {
            $controllerStr = 'App\Http\Controllers\\' . $page->controller;
            $controller = new $controllerStr();
            $page->controller = $controller;
            return $controller->$method($page);
        }catch(\Exception $e){
            switch(get_class($e)){
                case 'Symfony\Component\HttpKernel\Exception\NotFoundHttpException':
                    throw $e;
            }
            \Log::error($e);
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

        if(!empty($_FILES)){
            foreach($_FILES['files']['name'] as $key=>$filename) {
                $saved_file = Generate::savePicFile($filename, $_FILES['files']['tmp_name'][$key]);
                if (!empty($saved_file)) {
                    $input['mongo'][$key] = $saved_file;
                }
            }
        }


        foreach($input['mongo'] as $key => $fieldValue) {
            if($page->$key = $fieldValue)
                $fields[$key] = 1;
            else{
                $fields[$key] = 0;
                $status = 0;
            }
        }

        // deletes all files in html cache folder
        array_map('unlink', glob(base_path()."/storage/html/*"));

        if (Request::ajax())
        {
            return ['status'=>$status,'fields'=>$fields];
        }
        \Session::flash('flash_msg', ['success', 'All fields saved successfully']);
        return view($this->dirName().'/edit')->with('page', $page);
    }
}
