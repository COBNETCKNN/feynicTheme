<!-- Single Inisght Content Layout -->
<div class="container mx-auto">
    <div class="singleInsight_content__layout text-center">
        <?php 
        $singleInisghtContentLayoutTitle = get_sub_field('single_inisght_content_layout_title');
        $singleInisghtContentLayoutHeading = get_sub_field('single_inisght_content_layout_heading');
        $singleInisghtContentLayoutContent = get_sub_field('single_inisght_content_layout_content');
        ?>

        <span class="text-blue font-averta font-bold text-lg"><?php echo $singleInisghtContentLayoutTitle; ?></span>
        <h3 class="text-black dark:text-white font-averta font-bold text-4xl mb-3"><?php echo $singleInisghtContentLayoutHeading; ?></h3>
        <div class="text-black dark:text-white font-averta text-sm font-medium leading-snug flex justify-center">
            <div class="w-[85%]">
                <?php echo $singleInisghtContentLayoutContent; ?>
            </div>
        </div>
    </div>
</div>