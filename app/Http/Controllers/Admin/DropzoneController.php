<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\mongo;
use Carbon\Carbon;
use Franzose\ClosureTable\Tests\Models\Page;
use Request;



class DropzoneController extends Controller {

    public function upload(){
        $input = \Input::all();
        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = \Validator::make($input, $rules);
        if ($validation->fails())
        {
            return \Response::make($validation->errors->first(), 400);
        }

        $file = \Request::file('file');

        $extension = \File::extension($file->getClientOriginalName());
        $directory = public_path().'/images/uploads/';
        $filename = sha1($file->getClientOriginalName()).".{$extension}";

        //$upload_success = \Input::upload('file', $directory, $filename);
        $upload_success = \Request::file('file')->move($directory, $filename);

        if( $upload_success ) {
            return \Response::json(['status'=>'success', 'filename'=>$filename, 'oldName'=>$file->getClientOriginalName()], 200);
        } else {
            return \Response::json('error', 400);
        }
    }

    public function load($page_id_key){
        $result = [];
        $temp = explode('|',$page_id_key);
        $page_id = $temp[0];
        $key = $temp[1];

        Request::setLocal($temp[2]);

        $mongo = mongo::getMongoRootFromDB($key, $page_id);

        foreach($mongo->getChildrenKeys() as $k => $type){ //get an array which has the names of all the files and loop through it
            $obj['name'] = $mongo->{$k}->pic; //get the filename in array
            $obj['size'] = filesize(public_path()."/images/uploads/".$mongo->{$k}->pic); //get the flesize in array
            $obj['title']= $mongo->{$k}->title;
            $obj['alt']= $mongo->{$k}->alt;
            $result[] = $obj; // copy it to another array
        }
        header('Content-Type: application/json');
        return json_encode($result);
    }
}