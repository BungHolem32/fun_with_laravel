var PreventExitSplash = false;
$( function(){
    $('a').bind('click', function(){
        PreventExitSplash = true;
    });
});

if(typeof dontUseExitMsg != 'undefined')
    PreventExitSplash = true;

window.addEventListener("beforeunload", function (e) {
    var confirmationMessage = exitsplashmessage;
    if(PreventExitSplash == false){

        console.log(location.href + ' PreventExitSplash 0');
        (e || window.event).returnValue = confirmationMessage;
        return confirmationMessage;
    }
    else console.log('PreventExitSplash 1');
});