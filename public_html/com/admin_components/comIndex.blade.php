@section('head')
    <link rel="stylesheet" type="text/css" href="/com/admin_components/css/selectize.css"/>
@append

@section('endOfBody')
    <script type="text/javascript" src="/com/admin_components/js/standalone/selectize.js"></script>
    <script>
        $(function(){
            $('#pageComponents').selectize();
        });
    </script>
@append


<?php
$componentsArr = [];
if (isMongoNotEmpty($page->components))

    $componentsArr = $page->components->get();


?>
<select id="pageComponents" name="mongo[components][]" multiple class="demo-default" style="width:70%"
        placeholder="Select a state...">
    <option value="none" @if(in_array('none',$componentsArr)) selected @endif>No Components</option>
    <option value="faq" @if(in_array('faq' ,    $componentsArr)) selected @endif>FAQ</option>
    <option value="timer" @if(in_array('timer' ,  $componentsArr)) selected @endif>Timer</option>
    <option value="magic_button" @if(in_array('magic_button' ,  $componentsArr)) selected @endif>Magic Disappearing button</option>
    <option value="emailPopCom" @if(in_array('emailPopCom' ,  $componentsArr)) selected @endif>Email POPUP
    </option>
</select>

@if(!in_array('none',$componentsArr))

    @foreach($componentsArr as $key=> $compo)
        @if(is_int($key))
            <hr><br>
            @comEdit($compo)
        @endif
    @endforeach

@endif
