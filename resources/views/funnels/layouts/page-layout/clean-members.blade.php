@section('head')
    {!! $page->appendAsset(url('/css/clean-styles.css')) !!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style type="text/css">
        .style1 {font-size: 36px}
    </style>
@append

@section('bottom-scripts')
    @com('funnel_scripts')
@append

@section('page-layout')
    <div align="center">
        {!! $page->htmlHeader !!}
        {!! $page->smallHeader !!}
        <div align="center" class="monitor">
            @include('funnels.layouts._partials._video', ['w'=>655, 'h'=>381])
            <p><img src="/img/clean/button-new3.png" width="464" height="85" border="0" class="hov" /></p>

            <div class="formwrap">
                @include('funnels.layouts._partials._form', ['funnelId' => $page->getParent()->id])
            </div>

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

        </div>
    </div>
@endsection
