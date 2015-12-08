@section('head')
    {!! $page->appendAsset(url('/css/psy.css')) !!}
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="ppl">
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

@section('bottom-scripts')
    @if(Request::get('epass')!=532)
        <script language="javascript">
            var exitsplashmessage = '***************************************\n\n{!! br2nl($page->onExitPopup->msg) !!}\n\n\n***************************************';
            var exitsplashpage = '{{$page->onExitPopup->link}}';
        </script>
        <script language="javascript" src="/js/ExitSplashScript.js"></script>
    @endif
    {!! $page->appendAsset(url('/js/vendor/jquery-1.11.2.min.js')) !!}
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append