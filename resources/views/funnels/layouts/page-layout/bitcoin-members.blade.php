@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/bitcoin.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
@append

@section('page-layout')

    {!! $page->htmlHeader !!}
    <div class="head"></div>
    <div class="bg">
        <div class="form">
            @include('funnels.layouts._partials._form-vertical', ['funnelId' => $page->id])
        </div>
    </div>
    <div class="bottom"></div>
@endsection
