<?php

$pictures   = [];

function getFolderContent($path) {
    global $pictures;
    $folders = scandir($path);

    for ($i = 0; $i < count($folders); $i++) {
        if ($folders[$i] == '.' || $folders[$i] == '..') continue;
        $subPath = $path . "\\" . $folders[$i];
        if(is_dir($subPath)) {
            getFolderContent($subPath);
        }
        else {
            $avatarArr  = explode('-',$folders[$i]);

            if(count($avatarArr) > 1 && $avatarArr[0] != 'flag') {
                $avatar     = [];
                $avatar[0]  = str_replace(' ','+',trim($avatarArr[0]));
                $avatar[1]  = str_replace(' ','+',$avatarArr[1]);
                $avatar[1]  = explode('_',$avatarArr[1]);
                unset($avatar[1][2]);
                $avatar[1]  = str_replace(' ','+',trim(implode(',+',$avatar[1])));
                $newFile    = explode('.',implode('-',$avatar))[0];

                $countryCode    = explode('\\',$subPath)[1];
                $avatarFlag     = explode('.',explode('\\',$subPath)[2])[1];

                if(!array_key_exists($countryCode,$pictures)) {
                    $pictures[$countryCode] = [
                        'flag'      => "small-$countryCode.jpg",
                        "licenses"  => [ 'count' => 10, 'timer' => ['start' => 40, 'interval' => 2500]],
                        "avatars"   => []
                    ];
                }

                $pictures[$countryCode]['avatars'][] = ['pic' => $newFile, 'flag'=> $avatarFlag];
                copy($subPath,"original\\peoples\\$newFile.jpg");
            }
        }
    }
}

getFolderContent('original');
file_put_contents('original\temp-content.json',json_encode($pictures));
print_r($pictures);