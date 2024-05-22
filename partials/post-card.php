<?php 
$blogCategories = get_the_category();
?>

<div class="item blogCarousel_wrapper min-h-[450px] relative">
    <?php the_post_thumbnail('archive-featured'); ?>
    <div class="mt-3 mb-4">
        <?php
        foreach ( $blogCategories as $blogCategory ) {
            // Display the category name
            echo '<span class="bg-blue py-1 px-3 rounded-lg text-white inline items-center text-medium font-normal">' . esc_html( $blogCategory->name ) . '</span>';
        }
        ?>
    </div>
    <h4 class="text-black font-averta font-bold text-lg mb-2"><?php echo the_title(); ?></h4>
    <div class="text-black font-averta font-medium text-sm leading-tight">
        <?php 
        $excerptTextPost = get_field('single_blog_excerpt_text');
        echo wp_trim_words($excerptTextPost, 22);  ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0"></a>
</div>