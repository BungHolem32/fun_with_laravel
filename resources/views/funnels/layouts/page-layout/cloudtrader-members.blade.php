@section('head')
    {!! $page->appendAsset(url('/css/virtnext/font-awesome.min.css')) !!}

@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}

@append

@section('page-layout')

@endsection