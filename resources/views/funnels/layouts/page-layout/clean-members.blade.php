@section('head')
    {!! $page->appendAsset(url('/css/clean-styles.css')) !!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style type="text/css">
        .style1 {font-size: 36px}
    </style>
@append

@section('page-layout')
    <div align="center">
        {!! $page->htmlHeader !!}
        {!! $page->smallHeader !!}
        <div align="center" class="monitor">
            @include('funnels.layouts._partials._video')
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

        </div>
    </div>
@endsection



@section('bottom-scripts')
    @if(Request::get('epass')==532)
        <script language="javascript">
            var exitsplashmessage = '***************************************\n\n{!! br2nl($page->onExitPopup->msg) !!}\n\n\n***************************************';
            var exitsplashpage = '{{$page->onExitPopup->link}}'; //http://nana10.co.il'; //http://clickxo.com/LP/10kBONUS.php?a_aid=tenbonus';
        </script>
        <script language="javascript" src="/js/ExitSplashScript.js"></script>
    @endif
@append
