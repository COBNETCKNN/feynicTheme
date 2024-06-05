<div class="container mx-auto">
    <div class="grid grid-cols-2 gap-16">
        <!-- Content -->
        <div class="singleInsight_content__wrapper my-auto">
        <?php if( have_rows('single_insight_content_image_layout_content') ): ?>
            <?php while( have_rows('single_insight_content_image_layout_content') ): the_row(); 
            
            $singleInsightContentImageTitle = get_sub_field('single_insight_content_image_layout_title');
            $singleInsightContentImageHeading = get_sub_field('single_insight_content_image_layout_heading');
            $singleInsightContentImageText = get_sub_field('single_insight_content_image_layout_content');
            ?>

            <span class="text-blue font-averta font-bold text-lg"><?php echo $singleInsightContentImageTitle; ?></span>
            <h3 class="text-black dark:text-white font-averta font-bold text-4xl mb-3"><?php echo $singleInsightContentImageHeading; ?></h3>
            <div class="text-black dark:text-white font-averta text-sm font-medium leading-snug flex justify-center">
                <?php echo $singleInsightContentImageText; ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <!-- Image -->
        <div class="singleInsight_contentImage__wrapper my-auto">
        <?php 
            $singleInsightContentImagePic = get_sub_field('single_insight_content_image_layout_image');
            $singleInisghtImageSize = 'block-image';
                if( $singleInsightContentImagePic ) {
                    echo wp_get_attachment_image( $singleInsightContentImagePic, $singleInisghtImageSize );
                }
            ?>
        </div>
    </div>
</div>