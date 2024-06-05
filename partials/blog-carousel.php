<h3 class="text-start text-black dark:text-white font-averta text-2xl font-bold">Insights & Events</h3>
<!-- Post Carousel -->
<?php 
// The Query
$blogArgs = array(
    'post_type' => 'post',   // Specify the custom post type
    'posts_per_page' => -1,      // Number of posts to display
    'orderby' => 'date',        // Order by date
    'order' => 'DESC',           // Sort in descending order
);

$blogQuery = new WP_Query($blogArgs); ?>


<div class="owl-blog owl-carousel owl-theme py-8">
    <?php            
    // The Loop
    if ($blogQuery->have_posts()) :
        while ($blogQuery->have_posts()) : $blogQuery->the_post(); 
        
        $categories = get_the_category();
        ?>

        <div class="item blogCarousel_wrapper min-h-[450px]">
            <?php the_post_thumbnail('post-carousel'); ?>
            <div class="mt-3 mb-4">
                <?php
                foreach ( $categories as $category ) {
                    // Display the category name
                    echo '<span class="bg-blue py-1 px-3 rounded-lg text-white dark:text-black inline items-center text-medium font-normal">' . esc_html( $category->name ) . '</span>';
                }
                ?>
            </div>
            <h4 class="text-black dark:text-white font-averta font-bold text-lg mb-2"><?php echo the_title(); ?></h4>
            <div class="text-black dark:text-white font-averta font-medium text-sm leading-tight">
                <?php 
                $excerptTextPost = get_field('single_blog_excerpt_text');
                echo wp_trim_words($excerptTextPost, 22);  ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0"></a>
        </div>

    <?php
        endwhile;
    else :
        // No posts found
        echo 'No posts found';
    endif; 
    wp_reset_postdata();
    ?>
</div>