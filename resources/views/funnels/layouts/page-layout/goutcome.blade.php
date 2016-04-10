@section('head')
    {!! $page->appendAsset(url('/css/millionaire/funnel-style.css')) !!}
    {!! $page->appendAsset(url('/css/millionaire/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/jquery-ui.min.js')) !!}

@append

@section('page-layout')

@endsection