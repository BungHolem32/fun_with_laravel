@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/lp/demoaccounts.css')) !!}
    <meta name="viewport" content="">
@append

@section('bottom-scripts')
    @com('funnel_scripts')
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="head"></div>
    <div class="bg" id="top">
        <div class="form">
            @include('funnels.layouts._partials._form-vertical', ['funnelId' => $page->id])
        </div>
    </div>
    <a href="#top" class="bottom"></a>
@endsection

