<div class="singlePostHeading_layout text-start">
    <?php 
        $singlePostHeadingFourHeading = get_sub_field('heading_four_content_h4_heading');
        $singlePostHeadingFourContent = get_sub_field('heading_four_content_content');
    ?>
    <h4 class="font-averta text-black font-bold text-2xl mb-3"><?php echo $singlePostHeadingFourHeading; ?></h4>
    <div class="font-averta text-sm font-medium leading-snug">
        <?php echo $singlePostHeadingFourContent; ?>
    </div>
</div>