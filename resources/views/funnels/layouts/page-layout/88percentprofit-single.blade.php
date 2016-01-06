@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/clean-styles.css')) !!}
    {!! $page->appendAsset(url('/css/88percemtprofit-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    <script>
        var inputsCss = 'visibility:hidden;';
    </script>
    @com('funnel_scripts')
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="bg">
        @include('funnels.layouts._partials._form_lp', ['funnelId' => $page->id])
    </div>
@endsection
