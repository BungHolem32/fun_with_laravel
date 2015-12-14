$(document).ready(function() {

    $('video').on('click', function(e){
        if (this.paused)
            this.play();
        else
            this.pause();
        e.preventDefault();
    });

    $("video").on("contextmenu",function(){
        return false;
    });

});