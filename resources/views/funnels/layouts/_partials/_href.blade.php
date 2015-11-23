<?php
    if(!empty($page_id) && is_numeric($page_id)){
        echo 'test-'.$page_id;
        //echo '/'.Request::local()->code.'/'.App\Page::find($page_id)->fullSlug();
    }
    else{
        echo '#';
    }