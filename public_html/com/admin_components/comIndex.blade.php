@section('head')
    <link rel="stylesheet" type="text/css" href="/com/admin_components/css/selectize.css" />
@append

@section('endOfBody')
    <script type="text/javascript" src="/com/admin_components/js/standalone/selectize.js"></script>
    <script>
        $(function() {
            $('#pageComponents').selectize();
        });
    </script>
@append


<?php
    $componentsArr = [];
    if(isMongoNotEmpty($page->components))
        $componentsArr = $page->components->get();
?>
<select id="pageComponents" name="mongo[components][]" multiple class="demo-default" style="width:70%" placeholder="Select a state...">
    <option value="">Select a state...</option>
    <option value="faq"     @if(in_array('faq' ,    $componentsArr)) selected @endif>FAQ</option>
    <option value="timer"   @if(in_array('timer' ,  $componentsArr)) selected @endif>Timer</option>
</select>


@foreach($componentsArr as $compo)
    <hr><br>
    @comEdit($compo)
@endforeach

