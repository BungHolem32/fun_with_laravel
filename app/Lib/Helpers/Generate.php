<?php
/**
 * Created by PhpStorm.
 * User: ronenk
 * Date: 2/23/2016
 * Time: 9:57 PM
 */

namespace App\Lib\Helpers;


class Generate
{
    public static function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function generateFileName($original_filename) {
        $ext = pathinfo($original_filename, PATHINFO_EXTENSION);
        return (date ("Y-m-d-H-i-s_") . self::generateRandomString(6) . "." . $ext) ;
    }

    public static function saveCustomFile($filename, $tmpname, $folder, $size, Array $types=[]){
        // todo: add support for types & sizes
        $imgsPath = '/files/'.$folder.'/';
        $new_filename = $imgsPath. Generate::generateFileName($filename);
        $target_file  = base_path()."/public_html".$new_filename;
        if(move_uploaded_file( $tmpname, $target_file)) {
            //echo "The file ".  basename( $filename).  " has been uploaded to " . $target_file;
            return $new_filename;
        } else{
            //echo "There was an error uploading the file, please try again!";
            return "";
        }
    }

    public static function savePicFile($filename, $tmpname){
        return self::saveCustomFile($filename, $tmpname, 'imgs', 3000, ['jpeg']);
    }

    public static function saveDocFile($filename, $tmpname){
        return self::saveCustomFile($filename, $tmpname, 'docs', 3000, ['jpeg']);
    }

    public static function saveFile($filename, $tmpname){
        return self::saveCustomFile($filename, $tmpname, 8000, 'others');
    }
}