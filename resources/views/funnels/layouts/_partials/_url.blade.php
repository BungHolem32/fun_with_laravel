<?php
    $ln = Request::local()->code;
    if(!isset($ln)) //$ln = Request::local()->code;
        $ln='en';
?>
/{{ $ln }}/{{ $url }}