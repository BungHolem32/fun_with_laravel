{{--<script src="/js/vendor/jquery-1.11.2.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>--}}
{!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
@yield('bottom-scripts')

@if(Request::get('epass')!=532)
    <script language="javascript">
        var exitsplashmessage = '***************************************\n\n{!! br2nl($page->onExitPopup->msg) !!}\n\n\n***************************************';
        var exitsplashpage = '{{$page->onExitPopup->link}}';
    </script>
    <script language="javascript" src="/js/ExitSplashScript.js"></script>
@endif

{{--
<script src="/js/main.js"></script>
<script type="text/javascript" src="http://sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
@yield('ticker', '<script type="text/javascript" src="/js/ticker-sp.js"></script>')--}}
