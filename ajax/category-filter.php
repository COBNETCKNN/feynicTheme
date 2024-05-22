<?php 

function filter_posts_by_category() {
    $category_id = isset($_POST['category_id']) ? absint($_POST['category_id']) : 0;

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );

    if ($category_id) {
        $args['cat'] = $category_id;
    }

    $query = new WP_Query($args); ?>

    <div id="posts-container">
        <div class="grid grid-cols-3 gap-14">
            <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>

                <!-- Post card -->
                <?php get_template_part('partials/post', 'card'); ?>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php esc_html_e('No posts found.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php
    wp_die();
}
add_action('wp_ajax_filter_posts_by_category', 'filter_posts_by_category');
add_action('wp_ajax_nopriv_filter_posts_by_category', 'filter_posts_by_category');

?>