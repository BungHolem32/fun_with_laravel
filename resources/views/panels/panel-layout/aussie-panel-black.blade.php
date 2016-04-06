@section('head')

    <link rel="stylesheet" href="/css/panels/black/style.css" />
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}

    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
    {!! $page->appendAsset(url('/js/panel-common/panel.js')) !!}

@append

@section('page-layout')

@endsection
