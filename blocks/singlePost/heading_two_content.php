<div class="singlePostHeading_layout text-start">
    <?php 
        $singlePostHeadingTwoHeading = get_sub_field('heading_two_content_h2_heading');
        $singlePostHeadingTwoContent = get_sub_field('heading_two_content_content');
    ?>
    <h2 class="font-averta text-black font-bold text-4xl mb-3"><?php echo $singlePostHeadingTwoHeading; ?></h2>
    <div class="font-averta text-sm font-medium leading-snug">
        <?php echo $singlePostHeadingTwoContent; ?>
    </div>
</div>