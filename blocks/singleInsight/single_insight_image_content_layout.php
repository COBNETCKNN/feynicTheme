<!-- Single Inisght Image Content Layout -->
<div class="container mx-auto">
    <div class="grid grid-cols-2 gap-16">
        <!-- Image -->
        <div class="singleInsight_contentImage__wrapper my-auto">
            <?php 
            $singleInisghtImageContentPic = get_sub_field('single_insight_image_content_layout_image');
            $singleInisghtImageSize = 'block-image';
                if( $singleInisghtImageContentPic ) {
                    echo wp_get_attachment_image( $singleInisghtImageContentPic, $singleInisghtImageSize );
                }
            ?>
        </div>
        <!-- Content -->
        <div class="singleInsight_content__wrapper my-auto">
            <?php if( have_rows('single_insight_image_content_layout_content') ): ?>
                <?php while( have_rows('single_insight_image_content_layout_content') ): the_row(); 
                
                $singleInsightImageContentTitle = get_sub_field('single_insight_image_content_layout_group_title');
                $singleInsightImageContentHeading = get_sub_field('single_insight_image_content_layout_heading');
                $singleInsihtImageContentText = get_sub_field('single_insight_image_content_layout_content');
                ?>

                <span class="text-blue font-averta font-bold text-lg"><?php echo $singleInsightImageContentTitle; ?></span>
                <h3 class="text-black dark:text-white font-averta font-bold text-4xl mb-3"><?php echo $singleInsightImageContentHeading; ?></h3>
                <div class="text-black dark:text-white font-averta text-sm font-medium leading-snug flex justify-center">
                    <?php echo $singleInsihtImageContentText; ?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>