$(document).ready(function() {

    var PreventExitSplash = false;
    var Params = '';

    function navigateToLastChance(){
        if (PreventExitSplash === false) {
            PreventExitSplash = true;
            setTimeout(function () {
                window.location.href = exitsplashpage + Params;
            }, 150);
            return exitsplashmessage;
        }
    }

    $(function(){
        Params = window.location.search;
    });

    function dontWarn() {PreventExitSplash = true;}
    $("a[target=_blank]").click(dontWarn);
    $("form").submit(dontWarn);

    setTimeout(function () {
        window.onbeforeunload = navigateToLastChance;
    }, 150);


});