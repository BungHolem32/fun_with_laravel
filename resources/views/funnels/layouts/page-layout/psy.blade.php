@section('head')
    {!! $page->appendAsset(url('/css/psy.css')) !!}
@append

@section('page-layout')
    <h1><span>NOW LIVE: </span>FREE MONEY SYSTEM MADE ME</h1>
    <h2><span>$1,843,207.48 </span>IN 90 DAYS!</h2>
    <h3>Be sure your volume is up. Wait up to 10 seconds for video to load.</h3>
    <div class="ppl">
     {{--   <video class="video" autoplay="">
            <source src="http://cdnmediahosting.com/user29339cdn3/newproducts2014/freemoneynopromo.mp4" type="video/mp4">
        </video>--}}
        @include('funnels.layouts._partials._video')
    </div>

    <button class="submit ltr en"><span>FREE DOWNLOAD</span></button>
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