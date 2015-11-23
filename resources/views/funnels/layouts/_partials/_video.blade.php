
@if(str_contains($page->video, 'youtube.com'))
    <div class="video">
        <iframe id="ytplayer" type="text/html" width="640" height="360"
                src="{!! $page->video !!}?autoplay=1&amp;origin=http://example.com&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;iv_load_policy=3&amp;autohide=1" frameborder="0"></iframe>
    </div>
@elseif(str_contains($page->video, 'cdn.com'))
    <?php
        /***
         * short video intro?
         */
        $cdn = 'http://p.media.chaki.netdna-cdn.com/vod/media.chaki';
        $video_file = '/1_1.mp4';
        $video_secret = 'bRt249Jd4z5Cmx';
        $video_expire = time() + 3600; // one hour valid
        $continue_file = null;
        if(array_key_exists('st', $_GET)){
            $known_sizes = [15, 30]; // new begin-segment sizes (e.g. 30 seconds, 1 minute) can be added here.
            // the vide name format must be
            // 	- 	1_1-0_[NUMBER_OF_SECONDS].mp4
            //	-	1_1-[NUMBER_OF_SECONDS]_end.mp4
            if(in_array($_GET['st'], $known_sizes)){
                $video_file = '/1_1-0_'.$_GET['st'].'.mp4';
                $continue_file = '/1_1-'.$_GET['st'].'_end.mp4';
            }
        }



        //$video_file = '/1_1.mp4';
        $video_hash = str_replace('=', '', strtr(base64_encode(md5($video_secret . $video_file . $video_expire, true)), '+/', '-_')); // Using binary hashing.

        if($continue_file){
            $continue_expire = time()+1800;
            $continue_hash = str_replace('=', '', strtr(base64_encode(md5($video_secret . $continue_file . $continue_expire, true)), '+/', '-_'));
        }
    ?>
    <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-button vjs-big-play-centered" controls preload="none" width="640" height="264"
           poster="http://embed-0.wistia.com/deliveries/8757d7b2272358eb6196c1f8be2d4038d5be3c2d.jpg?image_crop_resized=640x360"
           data-setup='{ "controls": true, "autoplay": true }'>
        <source src="<?=$cdn?><?=$video_file."?st=".$video_hash."&e=".$video_expire;?>" type='video/mp4' />
        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
    </video>
@else
    <video class="video" width="640" height="360" autoplay>
        {{--http://cdnmediahosting.com/user29339cdn3/newproducts2014/fmsshortnewnov.mp4--}}
        <source src="{!! $page->video !!}" type="video/mp4" >
    </video>
@endif