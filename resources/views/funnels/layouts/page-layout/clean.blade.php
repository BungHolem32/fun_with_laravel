@section('head')
    {!! $page->appendAsset(url('/css/clean-styles.css')) !!}
@append

@section('page-layout')
    <div align="center">
        {!! $page->htmlHeader !!}
        {!! $page->smallHeader !!}
        <div align="center" class="monitor">

            {{--<video width="640" height="360" autoplay style="padding-top: 17px;">
                <source src="http://cdnmediahosting.com/user29339cdn3/newproducts2014/freemoneynopromo.mp4" type="video/mp4" >
            </video>--}}
            @include('funnels.layouts._partials._video')

            <p align="center">
                <a href="@include('funnels.layouts._partials._url',['url'=>$page->getFirstChild()->fullSlug().'?'.$_SERVER["QUERY_STRING"]])" target="_self">
                    <img src="/img/clean/button-new2.png" width="464" height="85" border="0" class="hov" />
                </a>
            </p>
            <p><img src="/img/clean/sealsgg9.png" width="412" height="60" /></p>
        </div>

        {{--@yield('content')--}}

        @if(Request::get('rs')==1)
            <div class="formwrap">
                <div class="container">
                    {!! $page->getRoot()->riskStatment !!}
                </div>
            </div>
        @endif

    </div>
@endsection

@section('bottom-scripts')
    @if(Request::get('epass')!=532)
        <script language="javascript">
            var exitsplashmessage = '***************************************\n\n{!! br2nl($page->onExitPopup->msg) !!}\n\n\n***************************************';
            var exitsplashpage = '{{$page->onExitPopup->link}}'; //http://nana10.co.il'; //http://clickxo.com/LP/10kBONUS.php?a_aid=tenbonus';
        </script>
        <script language="javascript" src="/js/ExitSplashScript.js"></script>
    @endif
@append