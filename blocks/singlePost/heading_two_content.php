<div class="singlePostHeading_layout text-start">
    <?php 
        $singlePostHeadingTwoHeading = get_sub_field('heading_two_content_h2_heading');
        $singlePostHeadingTwoContent = get_sub_field('heading_two_content_content');
    ?>
    <h2 class="font-averta text-black dark:text-white font-bold text-3xl lg:text-4xl mb-3"><?php echo $singlePostHeadingTwoHeading; ?></h2>
    <div class="text-black dark:text-white font-averta text-sm font-medium leading-snug">
        <?php echo $singlePostHeadingTwoContent; ?>
    </div>
</div>