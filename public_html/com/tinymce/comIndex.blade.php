@section('endOfBody')
    {!! $page->appendAsset(url('/com/'.$comName.'/tinymce/tinymce.min.js')) !!}
    {!! $page->appendAsset(url('/com/'.$comName.'/tinymce/init.js')) !!}
@append
