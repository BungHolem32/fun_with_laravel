@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/demoaccounts-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    <script>
        var inputsCss = 'visibility:hidden;';
    </script>
    @com('funnel_scripts')
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="head"></div>
    <div class="bg">
        @include('funnels.layouts._partials._form_vertical', ['funnelId' => $page->id])
    </div>
    <div class="bottom"></div>
@endsection
