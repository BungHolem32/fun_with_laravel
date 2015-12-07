@section('head')
    {!! $page->appendAsset(url('/css/psy.css')) !!}
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="ppl">
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