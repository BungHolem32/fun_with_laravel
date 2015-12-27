{!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
{!! $page->appendAsset(url('/js/jquery.placeholder.min.js')) !!}
<script language="javascript">
    $('input, textarea').placeholder();
</script>
@if(Request::get('epass')!=532)
    <?php // THIS takes the link and msg from the parent if not exist.
        if(isset($page->onExitPopup->link)){
            $tempLink = $page->onExitPopup->link;
            $tempMsg = $page->onExitPopup->msg;
        }
        else{
            $tempLink = $page->getParent()->onExitPopup->link;
            $tempMsg = $page->getParent()->onExitPopup->msg;
        }
    ?>
    <script language="javascript">
        var exitsplashmessage = '***************************************\n\n{!! br2nl($tempMsg) !!}\n\n\n***************************************';
        var exitsplashpage = '{{$tempLink}}';
    </script>
    <script language="javascript" src="/js/ExitSplashScript.js"></script>
@endif


