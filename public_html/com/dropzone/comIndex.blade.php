@section('head')
    {!! $page->appendAsset(url('/com/'.$comName.'/com.css')) !!}
@append

@section('endOfBody')
    {!! $page->appendAsset('//code.jquery.com/ui/1.11.4/jquery-ui.js') !!}
    {!! $page->appendAsset(url('/com/'.$comName.'/com.js')) !!}
    {!! $page->appendAsset(url('/com/'.$comName.'/init.js')) !!}
@append

{{--
<div class="form-group">
    <ul action="/admin/dropzone" class="dropzone form-control" id="my-awesome-dropzone"></ul>
</div>--}}
