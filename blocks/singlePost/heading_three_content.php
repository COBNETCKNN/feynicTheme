<div class="singlePostHeading_layout text-start">
    <?php 
        $singlePostHeadingThreeHeading = get_sub_field('heading_three_content_h3_heading');
        $singlePostHeadingThreeContent = get_sub_field('heading_three_content_content');
    ?>
    <h3 class="font-averta text-black dark:text-white font-bold text-2xl lg:text-3xl mb-3"><?php echo $singlePostHeadingThreeHeading; ?></h3>
    <div class="font-averta text-black dark:text-white text-sm font-medium leading-snug">
        <?php echo $singlePostHeadingThreeContent; ?>
    </div>
</div>