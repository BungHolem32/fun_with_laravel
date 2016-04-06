@section('head')

    <link rel="stylesheet" href="/css/aussie-new/panel/black/style.css" />
@append

@section('bottom-scripts')
    <script src="/js/aussie/panel/custom.js"></script>
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}

    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
    {!! $page->appendAsset(url('/js/panel-common/panel.js')) !!}

@append

@section('page-layout')

@endsection

