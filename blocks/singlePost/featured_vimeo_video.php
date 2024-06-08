<?php 
    $singlePostVimeoVideoID = get_sub_field('featured_vimeo_video_vimeo_video_id');
?>
<div class="singlePostVimeoVideo_wrapper relative h-[250px] lg:h-[400px]">
    <div class='embed-container'>
        <iframe src='https://player.vimeo.com/video/<?php echo $singlePostVimeoVideoID; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
</div>
