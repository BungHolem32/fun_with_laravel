$(window).on('load',function(){
    var PreventExitSplash = false;
    $('form').submit(function(ev) {
        PreventExitSplash = true;
    });


function addClickEvent(a,i,func) { if (typeof a[i].onclick != 'function') { a[i].onclick = func; } }
var theDiv = '<div id="ExitSplashDiv" style="display:block; width:100%; height:100%; position:absolute; background:#FFFFFF; margin-top:0px; margin-left:0px;" align="center">';
theDiv = theDiv + '<iframe src="'+exitsplashpage+'" width="100%" height="100%" align="middle" frameborder="0"></iframe>';
theDiv = theDiv + '</div>';
theBody = document.body; if (!theBody) {theBody = document.getElementById("body"); if (!theBody) {theBody = document.getElementsByTagName("body")[0];}}

function DisplayExitSplash(){
    console.log(location);
    var htmlTags = document.getElementsByTagName("html")[0];
    htmlTags.style.display = "table";
    htmlTags.style.height = "100%";
    htmlTags.style.width = "100%";
    if(PreventExitSplash == false){ window.scrollTo(0,0);  PreventExitSplash=true; divtag = document.createElement("div"); divtag.setAttribute("id","ExitSplashMainOuterLayer"); divtag.style.position="absolute"; divtag.style.width="100%"; divtag.style.height="100%"; divtag.style.zIndex="99"; divtag.style.left="0px"; divtag.style.top="0px"; divtag.innerHTML=theDiv; theBody.innerHTML=""; theBody.topMargin="0px"; theBody.rightMargin="0px"; theBody.bottomMargin="0px"; theBody.leftMargin="0px"; theBody.style.overflow="hidden"; theBody.appendChild(divtag); return exitsplashmessage; } }
var a = document.getElementsByTagName('A'); for (var i = 0; i < a.length; i++) { if(a[i].target !== '_blank') {addClickEvent(a,i, function(){ PreventExitSplash=true; });} else{addClickEvent(a,i, function(){ PreventExitSplash=false;});}}disablelinksfunc = function(){var a = document.getElementsByTagName('A'); for (var i = 0; i < a.length; i++) { if(a[i].target !== '_blank') {addClickEvent(a,i, function(){ PreventExitSplash=true; });} else{addClickEvent(a,i, function(){ PreventExitSplash=false;});}}}
    window.onbeforeunload = DisplayExitSplash;
});

