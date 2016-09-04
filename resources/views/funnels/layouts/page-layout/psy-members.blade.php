@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/clean-styles.css')) !!}
    {!! $page->appendAsset(url('/css/psy-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    <!-- START Exoclick Goal Tag | Re targeting -->
    <img width="1" height="1" src="http://main.exoclick.com/tag.php?goal=c01bb5a306ff305fccf4e814d8f927d3">
    <!-- END Exoclick Goal Tag | Re targeting -->
    <img style="display:none;" src="//a.mgid.com/1x1.gif?id=186216&type=c&g=x&t=x&tg=&v=1&r=">
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="ppl second">
        @include('funnels.layouts._partials._video')
    </div>

    <div class="container">
        <div class="wrap">
            <div class="text-center">
            <span style="color:#F2B31D;font-size:20px;font-family:Open-sans,sans-serif;">
                <span id="step">@ln(STEP 1):</span>
            </span>
            <span style="color:#fff;font-family:Open-sans,sans-serif;  font-size: 20px;">
                <span id="fund">@ln(CREATE YOUR ACCOUNT)</span>
            </span>
            </div>
            @include('funnels.layouts._partials._form', ['funnelId' => $page->getParent()->id])
        </div>
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

    <img class="cer" src="/img/psy/cer.png" />
@endsection
