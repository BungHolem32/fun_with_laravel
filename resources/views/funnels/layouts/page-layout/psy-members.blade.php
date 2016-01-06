@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/clean-styles.css')) !!}
    {!! $page->appendAsset(url('/css/psy-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    <script>
        var inputsCss = 'visibility:hidden;';
    </script>
    @com('funnel_scripts')
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="ppl second">
        @include('funnels.layouts._partials._video')
    </div>

    @include('funnels.layouts._partials._form', ['funnelId' => $page->getParent()->id])

    @if(Request::get('rs'))
        <div class="formwrap">
            <div class="container">
                {!! $page->getRoot()->riskStatment !!}
            </div>
        </div>
    @endif


    @if($page->getRoot()->thankyoupage->get())
        <div id="thankyou" class="thankyou">
            <div class="thankyouWrapper">
                <div class="thankyouContent">{!! $page->getRoot()->thankyoupage !!}</div>
            </div>
        </div>
    @endif

    <img class="cer" src="/img/psy/cer.png" />
@endsection
