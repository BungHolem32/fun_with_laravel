(function(){

    var parallax = document.querySelectorAll(".parallax");
    var picParallax = document.querySelectorAll(".picParallax");
    var speed1 = 0.3;
    var speed2 = 0.2;

    window.onscroll = function(){
        [].slice.call(parallax).forEach(function(el,i){

            var windowYOffset = window.pageYOffset;
            var elBackgrounPos = "92% " + ((windowYOffset * speed1) - 190) + "px";

            el.style.backgroundPosition = elBackgrounPos;
            //el.style.top = (windowYOffset * speed2)+"px";

        });
        [].slice.call(picParallax).forEach(function(el,i){

            var windowYOffset = window.pageYOffset;
            var elPicPos = "-" + ((windowYOffset * speed2)+240) + "px";

            el.style.top = elPicPos;

        });

    };

})();