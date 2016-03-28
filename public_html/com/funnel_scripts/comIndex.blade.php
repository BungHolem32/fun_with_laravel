{!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
{!! $page->appendAsset(url('/js/jquery.placeholder.min.js')) !!}
<script language="javascript">
    $('input, textarea').placeholder();
    $(function(){ // add query string to form action
        $('form').each(function(){
            var action = $(this).attr('action').split('?');

            // if its a postEmailForm action
            if(action[0].indexOf('postEmailForm')>-1){

                // The postEmailForm should never have any parameters on the action
                // here we add the pages parameters to the form, which is always safe

                // Change the action => adds the params to action.
                $(this).attr('action', action[0] + window.location.search);
            }
        });
    });
</script>
@if(Request::get('epass')!=532)
    <?php // THIS takes the link and msg from the parent if not exist.
        if(strlen($page->onExitPopup->link) != 0){
            $tempLink = $page->onExitPopup->link;
            $tempMsg = $page->onExitPopup->msg;
        }

        // if there is msg but there is no link then make
        // the link in the same page.
        else if(strlen($page->onExitPopup->msg) != 0){
            $tempLink = '/'.$page->fullSlug();
            $tempMsg = $page->onExitPopup->msg;
        }
        else {
            $tempLink = $page->getParent()->onExitPopup->link;
            $tempMsg = $page->getParent()->onExitPopup->msg;
        }
    ?>
    <script language="javascript">
        var exitsplashmessage = '***************************************\n\n{!! br2nl($tempMsg) !!}\n\n\n***************************************';
        var exitsplashpage = '{{$tempLink}}';
    </script>
    <script language="javascript" src="/js/ExitSplashScriptJQuery.js"></script>
@endif


