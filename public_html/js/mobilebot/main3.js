
var mainVideoTime,exitPopVideo;
      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var tag = document.createElement('script');
      tag.src = "http://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var secondVid_display = $('#newVid').css("display");

      var auto = getAuto();
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('ytplayer', {
          playerVars: { 'autoplay': auto, 'controls': 0,'showinfo':0,'wmode':'opaque' },
          videoId: '576Aop5J1wc',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // $(document).ready(function(){
      //   if(secondVid_display == "block"){
      //   var iframes = $('iframe');
      //   var firstVid = iframes[0];
        
      // }
      // });

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        //event.target.playVideo();
      }

      function playTheVideo(){
        var fn = function(){ player.playVideo(); }
        setTimeout(fn, 1000);
        //player.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
   
      }
      function stopVideo() {
        player.stopVideo();
      }


$('#exitContent').click(function(){
    player.pauseVideo();
});