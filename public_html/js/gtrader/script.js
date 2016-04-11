$('body').on('click','.second-submit',function () {
    $('.first-submit').eq(0).click();
});

function openStories(src) {
    $('#stories_videos').show();
    $('#op-asset-video_lightbox-2 iframe').attr('src',src);
}

function closeStories() {
    $('#stories_videos').hide();
    $('#op-asset-video_lightbox-2 iframe').attr('src','');
}