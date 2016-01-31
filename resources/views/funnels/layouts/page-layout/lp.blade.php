@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/lp/'.$lpName.'.css?v='.time())) !!}
    <meta name="viewport" content="width=device-width, initial-scale=1">
@append

@section('bottom-scripts')
    @com('funnel_scripts')
@append

@section('page-layout')

    <div class="head"></div>
    <div class="bg">
        <div class="form">
            @include('funnels.layouts._partials._form-vertical', ['funnelId' => $page->id])
        </div>
    </div>
    @if($lpName == 'trading-signals' || $lpName == 'demoaccounts')
        <a href="#top" class="bottom"></a>
    @else
        <div class="bottom"></div>
    @endif

@endsection
