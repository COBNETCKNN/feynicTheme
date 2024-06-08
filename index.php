<?php get_header() ?>

<!-- Hero Section -->
<section id="blogArchiveSingle" class="pt-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs_wrapper relative z-10">
        <nav role="navigation" aria-label="Feynic navigation" class="hidden lg:block breadcrumb font-averta text-sm text-black font-light mb-10">
            <ol>
                <li>
                <a class="text-black dark:text-white" href="<?php echo site_url(); ?>">Home</a>
                </li>
                <span aria-hidden="true" class="breadcrumb-separator text-black dark:text-white">&gt;</span>
                <li>
                <a class="text-blue font-bold" href="<?php echo site_url('/blog')?>">Insights</a>
                </li>
                </li>
            </ol>
        </nav>
        </div>
        <div class="blogArchive_heading__wrapper py-36 lg:py-24">
            <h1 class="text-center lg:text-start text-black dark:text-white font-averta text-4xl lg:text-6xl font-bold leading-tight">Insights & <br>Events</h1>
        </div>
        <!-- Mobile Filters and Search -->
        <div class="lg:hidden mx-10">
            <div class="">
                <!-- Search bar -->
                <div class="flex justify-center">
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
                    <div class="flex searchbar_wrapper mb-10">
                        <label class="screen-reader-text" for="s">Search for:</label>
                        <input class="serachbar_input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search..."/>
                        <button type="submit" id="searchsubmit" class="searchsubmit relative"></button>
                    </div>
                </form>
                </div>
                <div class="w-full flex justify-center pb-14">
                    <div class="custom-select w-fit">
                        <!-- Categories Ajax filter -->
                        <?php
                        // Fetch all categories
                        $categories = get_categories(); ?>

                        <div class="custom-select-wrapper">
                        <div class="custom-select py-2 lg:py-5 px-3 lg:px-7">
                            <div class="custom-select-trigger">Select Category</div>

                            <ul class="custom-options">
                                <li class="custom-option" data-value="">All posts</li>
                                <?php foreach ($categories as $category) : ?>
                                    <li class="custom-option" data-value="<?php echo esc_attr($category->term_id); ?>">
                                        <?php echo esc_html($category->name); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <input type="hidden" id="category-filter" name="category-filter">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured post -->
        <div class="lg:mx-10">
            <div class="singleFeatured_wrapper bg-black py-5 lg:py-14 px-5 lg:px-14 rounded-2xl">
                <div class="lg:grid lg:grid-cols-2 gap-4">
                    <?php 
                    $featuredArgs = array(
                        'post_type' => 'post', 
                        'posts_per_page' => 1,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );

                    $postFeaturedQuery = new WP_Query($featuredArgs); 

                    if ($postFeaturedQuery->have_posts()) :
                        while ($postFeaturedQuery->have_posts()) : $postFeaturedQuery->the_post(); 
                        
                        $categories = get_the_category();
                        $post_date = get_the_date('jS F Y');
                        $excerptTextPost = get_field('single_blog_excerpt_text');
                        ?>

                        <!-- Featured Image -->
                        <div class="blogArchive_singleFeatured__wrapper flex justify-start my-auto">
                            <?php the_post_thumbnail('blog-thumbnail'); ?>
                        </div>
                        <!-- Content -->
                        <div class="my-5 lg:my-auto">
                            <div class="blogArchive_catDate__wrapper lg:flex justify-start items-center">
                            <?php 
                                foreach ( $categories as $category ) {
                                    // Display the category name
                                    echo '<span class="bg-blue py-1 px-3 rounded-lg text-white inline items-center text-medium font-normal">' . esc_html( $category->name ) . '</span>';
                                } 
                                ?>
                                <span class="text-white font-averta ml-7"><?php echo date_create_from_format('jS F Y', $post_date)->format('jS F Y'); ?></span>
                            </div>
                            <h4 class="text-white font-averta font-bold text-1xl lg:text-3xl my-5"><?php echo the_title(); ?></h4>
                            <div class="text-white font-averta font-medium text-sm leading-tight w-[90%]">
                                <?php echo wp_trim_words($excerptTextPost, 35);  ?>
                            </div>
                            <a class="" href="<?php the_permalink(); ?>">
                                <button class="mt-5 group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-6 py-2 font-medium text-white text-sm sm:text-lg"><span>Read More</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                            </a>
                        </div>
                    <?php
                        endwhile;
                    else :
                        // No posts found
                        echo 'No post was found.';
                    endif; 
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Desktop Categories Ajax filter and Search bar -->
<section id="filterSearchBar" class="hidden lg:block pt-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="flex justify-between">
                <div class="custom-select w-fit">
                    <!-- Categories Ajax filter -->
                    <?php
                    // Fetch all categories
                    $categories = get_categories(); ?>

                    <div class="custom-select-wrapper">
                    <div class="custom-select py-5 px-7">
                        <div class="custom-select-trigger">Select Category</div>

                        <ul class="custom-options">
                            <li class="custom-option" data-value="">All posts</li>
                            <?php foreach ($categories as $category) : ?>
                                <li class="custom-option" data-value="<?php echo esc_attr($category->term_id); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <input type="hidden" id="category-filter" name="category-filter">
                    </div>
                </div>
                <!-- Search bar -->
                <div class="">
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
                    <div class="flex searchbar_wrapper">
                        <label class="screen-reader-text" for="s">Search for:</label>
                        <input class="serachbar_input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search..."/>
                        <button type="submit" id="searchsubmit" class="searchsubmit relative"></button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Posts query --->
<section id="postsQuery" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="lg:mx-10">
            <div id="posts-container">
                <div class="lg:grid lg:grid-cols-3 gap-14">
                    <?php 
                    $first_post = get_posts(array(
                        'post_type'      => 'post',
                        'posts_per_page' => 1, // Get only the first post
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ));

                    $exclude_ids = array();
                    if ($first_post) {
                        $exclude_ids[] = $first_post[0]->ID; // Get the ID of the first post and exclude it
                    }

                    $blogPostsArgs = array(
                        'post_type' => 'post', 
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'post__not_in'   => $exclude_ids,
                    );

                    $blogPostsQuery = new WP_Query($blogPostsArgs); 

                    if ($blogPostsQuery->have_posts()) :
                        while ($blogPostsQuery->have_posts()) : $blogPostsQuery->the_post(); 
                        ?>

                        <!-- Post card -->
                        <?php get_template_part('partials/post', 'card'); ?>

                    <?php
                        endwhile;
                    else :
                        // No posts found
                        echo 'No posts were found.';
                    endif; 
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>