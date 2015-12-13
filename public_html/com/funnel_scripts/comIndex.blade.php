{!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
{!! $page->appendAsset(url('/js/jquery.placeholder.min.js')) !!}
<script language="javascript">
    $('input, textarea').placeholder();
</script>
@if(Request::get('epass')!=532)
    <script language="javascript">
        var exitsplashmessage = '***************************************\n\n{!! br2nl($page->onExitPopup->msg) !!}\n\n\n***************************************';
        var exitsplashpage = '{{$page->onExitPopup->link}}';
    </script>
    <script language="javascript" src="/js/ExitSplashScript.js"></script>
@endif


