@section('head')
    {!! $page->appendAsset(url('/css/gtrader/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/gtrader/script.js')) !!}
@append

@section('page-layout')

@endsection