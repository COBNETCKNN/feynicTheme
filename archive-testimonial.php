<?php get_header() ?>

<!-- Hero Section -->
<section id="blogArchiveSingle" class="py-14 bg-white">
    <div class="container mx-auto">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs_wrapper relative z-10">
        <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-black font-light mb-10">
            <ol>
                <li>
                <a href="<?php echo site_url(); ?>">Home</a>
                </li>
                <span aria-hidden="true" class="breadcrumb-separator">&gt;</span>
                <li>
                <a class="text-blue font-bold" href="<?php echo get_post_type_archive_link('testimonial')?>">Testimonials</a>
                </li>
                </li>
            </ol>
        </nav>
        </div>
        <div class="blogArchive_heading__wrapper py-24">
            <h1 class="text-black font-averta text-6xl font-bold leading-tight">Testimonials</h1>
        </div>
    </div>
</section>


<!-- Featured post -->
<section id="blogArchiveFeatured">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="singleFeatured_wrapper bg-black py-14 px-14 rounded-2xl">
                <div class="grid grid-cols-2 gap-4">
                    <?php 
                    $featuredArgs = array(
                        'post_type' => 'testimonial', 
                        'posts_per_page' => 1,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );

                    $postFeaturedQuery = new WP_Query($featuredArgs); 

                    if ($postFeaturedQuery->have_posts()) :
                        while ($postFeaturedQuery->have_posts()) : $postFeaturedQuery->the_post(); 
                        
                        $categories = get_the_category();
                        $post_date = get_the_date('jS F Y');
                        $excerptTextPost = get_field('single_testimonial_excerpt_text');
                        ?>

                        <!-- Featured Image -->
                        <div class="blogArchive_singleFeatured__wrapper flex justify-start my-auto">
                            <?php the_post_thumbnail('blog-thumbnail'); ?>
                        </div>
                        <!-- Content -->
                        <div class="my-auto">
                            <div class="blogArchive_catDate__wrapper flex justify-start items-center">
                                <span class="text-white font-averta"><?php echo date_create_from_format('jS F Y', $post_date)->format('jS F Y'); ?></span>
                            </div>
                            <h4 class="text-white font-averta font-bold text-3xl my-5"><?php echo the_title(); ?></h4>
                            <div class="text-white font-averta font-medium text-sm leading-tight w-[90%]">
                                <?php echo wp_trim_words($excerptTextPost, 35);  ?>
                            </div>
                            <a class="bg-blue py-2 px-7 rounded-xl text-white flex items-center w-fit text-lg font-semibold mt-7" type="button" href="<?php echo the_permalink(); ?>">
                            <span>Read More</span>
                            <svg class="ml-2" width="20" height="12" viewBox="0 0 20 12" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_509_229)">
                                <path d="M19.3371 5.60733C19.3371 5.60733 19.3263 5.59633 19.3219 5.59193L14.0171 0.218005C13.8065 -0.0394679 13.4309 -0.0724773 13.1768 0.140983C12.9227 0.354444 12.8902 0.735152 13.1008 0.992625C13.1247 1.02123 13.1486 1.04544 13.1768 1.06965L17.4632 5.41808H1.09714C0.767086 5.41808 0.5 5.68876 0.5 6.02325C0.5 6.35775 0.767086 6.62842 1.09714 6.62842H17.4632L13.1703 10.9725C12.9466 11.2101 12.9466 11.5864 13.1703 11.8241C13.4026 12.0596 13.7761 12.0596 14.0085 11.8241L19.3176 6.44137C19.5499 6.2147 19.5565 5.8406 19.3328 5.60513L19.3371 5.60733Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_509_229">
                                <rect width="19" height="12" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                            </svg>    
                            </a>
                        </div>
                    <?php
                        endwhile;
                    else :
                        // No tsetmionial found
                        echo 'No testmionial was found.';
                    endif; 
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Posts query --->
<section id="postsQuery" class="pt-24 py-14 bg-white">
    <div class="container mx-auto">
        <div class="mx-10">
            <div id="posts-container">
                <div class="grid grid-cols-3 gap-14">
                    <?php 
                    $first_post = get_posts(array(
                        'post_type'      => 'testimonial',
                        'posts_per_page' => 1, // Get only the first post
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ));

                    $exclude_ids = array();
                    if ($first_post) {
                        $exclude_ids[] = $first_post[0]->ID; // Get the ID of the first post and exclude it
                    }

                    $archiveTestimonialArgs = array(
                        'post_type' => 'testimonial', 
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'post__not_in'   => $exclude_ids,
                    );

                    $archiveTestimonialQuery = new WP_Query($archiveTestimonialArgs); 

                    if ($archiveTestimonialQuery->have_posts()) :
                        while ($archiveTestimonialQuery->have_posts()) : $archiveTestimonialQuery->the_post(); 
                        ?>

                        <div class="archiveTestimonial_card__wrapper">
                            <?php the_post_thumbnail('archive-featured'); ?>
                            <h4 class="text-black font-averta font-bold text-lg my-2"><?php echo the_title(); ?></h4>
                            <div class="text-black font-averta font-medium text-sm leading-tight min-h-[60px]">
                                <?php 
                                $excerptTextPost = get_field('single_testimonial_excerpt_text');
                                echo wp_trim_words($excerptTextPost, 22);  ?>
                            </div>
                            <a class="bg-blue py-1.5 px-5 rounded-xl text-white flex items-center text-sm font-semibold w-fit mt-5" type="button" href="<?php echo the_permalink(); ?>">
                            <span>Read more</span>
                            <svg class="ml-2" width="20" height="12" viewBox="0 0 20 12" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_509_229)">
                                <path d="M19.3371 5.60733C19.3371 5.60733 19.3263 5.59633 19.3219 5.59193L14.0171 0.218005C13.8065 -0.0394679 13.4309 -0.0724773 13.1768 0.140983C12.9227 0.354444 12.8902 0.735152 13.1008 0.992625C13.1247 1.02123 13.1486 1.04544 13.1768 1.06965L17.4632 5.41808H1.09714C0.767086 5.41808 0.5 5.68876 0.5 6.02325C0.5 6.35775 0.767086 6.62842 1.09714 6.62842H17.4632L13.1703 10.9725C12.9466 11.2101 12.9466 11.5864 13.1703 11.8241C13.4026 12.0596 13.7761 12.0596 14.0085 11.8241L19.3176 6.44137C19.5499 6.2147 19.5565 5.8406 19.3328 5.60513L19.3371 5.60733Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_509_229">
                                <rect width="19" height="12" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                            </svg>    
                            </a>
                        </div>

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