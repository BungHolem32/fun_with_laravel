@section('head')
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,900,500,700' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/gtrader/style.min38943894.css')) !!}
    {!! $page->appendAsset(url('/css/gtrader/default.min38943894.css')) !!}
    {!! $page->appendAsset(url('/js/gtrader/jquery4a804a80.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/jquery-migrate.min15761576.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/op-jquery-base-all.min38943894.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/flowplayer.min38943894.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/op-video-all.min38943894.js')) !!}
    {!! $page->appendAsset(url('/css/gtrader/prettyPhoto.min38943894.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/popup.min38943894.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/comment-reply.min9c929c92.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/op-front-all.min38943894.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/menus.min38943894.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/jquery.prettyPhoto.min38943894.js')) !!}
@append

@section('page-layout')

@endsection