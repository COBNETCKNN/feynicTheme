<?php get_header() ?>

<!-- Hero Section -->
<section id="hero" class="bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-0 lg:mx-10 lg:h-[93vh] flex items-center">
            <div class="lg:grid lg:grid-cols-5 gap-4">
                <!-- Content Area -->
                <div class="lg:col-span-2 mt-24 lg:mt-0">
                <?php if( have_rows('homepage_hero_section') ): ?>
                    <?php while( have_rows('homepage_hero_section') ): the_row(); 

                        // Get sub field values.
                        $heroHeading = get_sub_field('homepge_hero_title');
                        $heroSubText = get_sub_field('homepage_hero_subtext');

                        ?>

                        <h1 class="text-black dark:text-white font-averta text-2xl xs:text-4xl sm:text-5lg font-bold lg:w-[50%] leading-tight mb-7"><?php echo $heroHeading; ?></h1>
                        <p class="font-averta text-sm font-medium leading-snug lg:w-[72%] mb-7 text-black dark:text-white"><?php echo $heroSubText; ?></p>
                        <div class="heroButtons flex justify-start lg:justify-between lg:w-[70%]">
                            <a href="<?php echo site_url('/what-we-do')?>">
                                <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-3 sm:px-6 py-2 font-medium text-white dark:text-black text-xs xs:text-lg"><span>What We Do</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                            </a>
                            <a href="#Projects" class="ml-5 lg:ml-0">
                                <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-black dark:bg-white px-3 sm:px-6 py-2 font-medium text-white dark:text-black text-xs xs:text-lg"><span>Our Work</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <!-- Who We Work With -->
                <div class="lg:col-span-3 my-auto">
                    <div class="lg:grid lg:grid-cols-3 gap-4">
                        <?php
                        // The Query
                        $partnerArgs = array(
                            'post_type' => 'partners',   // Specify the custom post type
                            'posts_per_page' => 3,      // Number of posts to display
                            'orderby' => 'date',        // Order by date
                            'order' => 'DESC',           // Sort in descending order
                        );

                        $partnersQuery = new WP_Query($partnerArgs); 
                        
                        // The Loop
                        if ($partnersQuery->have_posts()) :
                            while ($partnersQuery->have_posts()) : $partnersQuery->the_post(); 
                            
                            $partnersFeaturedImageUrl = get_the_post_thumbnail_url(get_the_ID(), 'whoweworkwith-thumbnail'); 
                            ?>
                            <div class="hero_partners__thumbnails h-[420px] w-[250px] rounded-2xl relative"  style="background-image: url('<?php echo esc_url($partnersFeaturedImageUrl); ?>');">
                                <h2 class="text-white font-averta font-bold text-3xl absolute bottom-5 left-3 z-30 leading-tight">For <br><?php the_title(); ?></h2>
                                <a class="absolute z-40 top-0 left-0 w-full h-full"href="<?php echo the_permalink(); ?>">
                                </a>
                                <div class="blue_overlay z-30 top-0 left-0 w-full h-full"></div>
                            </div>

                            <?php
                            endwhile;
                        else :
                            // No posts found
                            echo 'No projects found';
                        endif; 
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Work With Feynic Section -->
<section id="workWithFeynic" class="py-20 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-0 lg:mx-10">
            <div class="grid lg:grid-cols-2 gap-4">
            <?php if( have_rows('hompage_work_with_feynic') ): ?>
                    <?php while( have_rows('hompage_work_with_feynic') ): the_row(); ?>
                        <!-- Content Area -->
                        <div class="my-auto" data-aos="fade-up" data-aos-duration="2000">
                        <?php if( have_rows('work_with_feynic_content_area') ): ?>
                            <?php while( have_rows('work_with_feynic_content_area') ): the_row(); 
                            
                            $workWithUsHeading = get_sub_field('work_with_feynic_heading');
                            $workWithUsSubtext = get_sub_field('work_with_feynic_subtext');
                            ?>

                            <h2 class="font-averta text-2xl sm:text-5xl text-black dark:text-white font-bold mb-5"><?php echo $workWithUsHeading; ?></h2>
                            <div class="font-averta text-sm font-light leading-tight w-[80%] mb-7 text-black dark:text-white"><?php echo $workWithUsSubtext; ?></div>
                            <a href="<?php echo site_url('/contact-us')?>">
                                <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-6 py-2 font-medium text-white dark:text-black text-lg"><span>Work With Feynic</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                            </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        <!-- Vision and Goals -->
                        <div class="" data-aos="fade-up" data-aos-duration="2000">
                        <?php if( have_rows('work_with_feynic_vision_and_goals') ): ?>
                            <?php while( have_rows('work_with_feynic_vision_and_goals') ): the_row(); ?>

                            <!-- Repeater -->
                            <?php $i = 1; ?>
                            <?php if( have_rows('work_with_feynic_vision_and_goals_repeater') ): ?>
                                <?php while( have_rows('work_with_feynic_vision_and_goals_repeater') ): the_row(); 
                                
                                $objectiveTitle = get_sub_field('work_with_feynic_vision_and_goals_repeater_title');
                                $objectiveDescription = get_sub_field('work_with_feynic_vision_and_goals_repeater_description');
                                ?>

                                <!-- Objectives Card -->
                                <div class="objectivesCard bg-black py-8 px-9 my-3 rounded-2xl min-h-[205px] flex">
                                    <div class="objectiveCard_number mr-4">
                                        <span class="text-black text-1xl sm:text-3xl font-bold bg-white py-1 px-5"><?php echo $i; ?></span>
                                    </div>
                                    <div class="objectiveCard_content">
                                        <h3 class="text-white text-lg sm:text-xl font-averta font-bold mb-2"><?php echo $objectiveTitle; ?></h3>
                                        <div class="text-white text-normal font-averta">
                                            <?php echo $objectiveDescription; ?>
                                            <?php $i++; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section id="whatWeDo" class="py-10 lg:py-20 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-0 lg:mx-10">
            <h3 class="text-black dark:text-white font-averta text-3xl font-bold">What we do</h3>
            <div class="servicesListing py-10 block lg:flex justify-between items-center">
                <?php 
                // The Query
                $serviceArgs = array(
                    'post_type' => 'service',   // Specify the custom post type
                    'posts_per_page' => -1,      // Number of posts to display
                    'orderby' => 'date',        // Order by date
                    'order' => 'DESC',           // Sort in descending order
                );

                $serviceQuery = new WP_Query($serviceArgs); 
                
                // The Loop
                if ($serviceQuery->have_posts()) :
                    while ($serviceQuery->have_posts()) : $serviceQuery->the_post(); 
                    
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'services-thumbnail');
                    ?>

                    <div class="servicesListing_card p-5 relative" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                        <h4 class="text-white font-averta text-2xl text-start font-bold absolute bottom-5 z-10 leading-snug"><?php echo the_title(); ?></h4>
                        <a class="w-full h-full absolute top-0 right-0 z-20" href="<?php echo the_permalink(); ?>"></a>
                        <div class="serviceListin_cardSvg__wrapper absolute top-5 right-5 z-10">
                            <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H8M17 7V16" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>

                <?php
                    endwhile;
                else :
                    // No posts found
                    echo 'No projects found';
                endif; 
                wp_reset_postdata();
                ?>
            </div>
            <div class="flex justify-center">
                <a href="<?php echo site_url('/what-we-do')?>">
                    <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-black dark:bg-white px-6 py-2 font-medium text-white dark:text-black text-lg"><span>Discover Capabilities</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="Projects" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-0 lg:mx-10">
            <h3 class="text-black dark:text-white font-averta text-3xl font-bold">Our projects</h3>
            <div class="owl-projects owl-carousel owl-theme my-8">
                <?php 
                    // The Query
                    $projectArgs = array(
                        'post_type' => 'project',   // Specify the custom post type
                        'posts_per_page' => -1,      // Number of posts to display
                        'orderby' => 'date',        // Order by date
                        'order' => 'DESC',           // Sort in descending order
                    );

                    $projectsQuery = new WP_Query($projectArgs); 
                    
                    // The Loop
                    if ($projectsQuery->have_posts()) :
                        while ($projectsQuery->have_posts()) : $projectsQuery->the_post(); ?>

                        <div class="projects_wrapper item blogCarousel_wrapper min-h-[450px]">
                            <div class="">
                                <!-- Project Thumbnail -->
                                <div class="proejcts_thumbnail__wrapper my-auto col-span-3">
                                    <?php 
                                    // Get the ID of the post
                                    $project_post_id = get_the_ID();

                                    // Get the featured image URL with custom size
                                    $projectImageUrl = get_the_post_thumbnail_url($project_post_id, 'post-carousel');
                                    $projectExcerptText = get_field('single_project_excerpt_text');

                                    // Display the image
                                    if ($projectImageUrl) {
                                        echo '<img src="' . esc_url($projectImageUrl) . '" alt="' . esc_attr(get_the_title()) . '" />';
                                    } ?>
                                </div>
                                <!-- Project Content -->
                                <div class="my-auto projects_content__wrapper col-span-3">
                                    <h3 class="text-black dark:text-white font-averta text-xl font-bold my-2"><?php the_title(); ?></h3>
                                    <div class="text-black dark:text-white text-normal font-averta mb-5 min-h-[100px]">
                                        <?php echo wp_trim_words($projectExcerptText, 25); ?>
                                    </div>
                                    <a href="<?php echo the_permalink(); ?>">
                                        <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-4 py-2 font-medium text-white dark:text-black text-sm"><span>Read More</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                                    </a>
                                </div>
                                <div class="col-span-1"></div>
                            </div>
                        </div>
                    <?php
                        $i++;
                        endwhile;
                    else :
                        // No posts found
                        echo 'No projects found';
                    endif; 
                    wp_reset_postdata();
                    ?>
                </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section id="testimonial" class="bg-blue py-14">
    <div class="container mx-auto">
        <div class="mx-0 lg:mx-10">
            <h2 class="text-white text-center font-averta text-2xl sm:text-5xl text-black font-bold mb-3">Testimonials</h2>
                <div class="lg:grid lg:grid-cols-5 gap-4">
                <!-- Featured testimonial -->
                <?php 
                $featuredVimeoVideoID = get_field('testimonial_featured_video');
                ?>
                <div class="col-span-3 video-player my-auto">
                    <iframe id="vimeo-player" src="https://player.vimeo.com/video/<?php echo $featuredVimeoVideoID; ?>" width="830" height="560" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
                <!-- Vimeo Playlist -->
                <div class="col-span-2 my-auto">
                    <div id="playlist" class="bg-white dark:bg-zinc-800 rounded-2xl">
                        <h4 class="font-averta font-bold text-xl text-black dark:text-white py-3 px-5">Suggested Content</h4>
                        <div class="scrollable-container">
                            <div class="">
                                <?php if( have_rows('homepage_testimonial_playlist') ): ?>
                                    <?php while( have_rows('homepage_testimonial_playlist') ): the_row(); 

                                        // Get sub field values.
                                        $testiomnialPlaylistImage = get_sub_field('hompage_video_thumbnail');
                                        $testiomnialPlaylistImageSize = 'video-thumbnail';
                                        $testimonialPlaylistVideoID = get_sub_field('homepage_vimeo_video_id');
                                        $testimonialPlaylistTitle = get_sub_field('homepage_video_title');

                                        ?>

                                        <div class="playlist-item flex items-center" data-video-id="<?php echo $testimonialPlaylistVideoID; ?>">
                                            <?php
                                            if( $testiomnialPlaylistImage ) {
                                                echo wp_get_attachment_image( $testiomnialPlaylistImage, $testiomnialPlaylistImageSize );
                                            }
                                            ?>
                                            <h5 class="text-lg font-averta text-black dark:text-white font-bold ml-5"><?php echo $testimonialPlaylistTitle; ?></h5>
                                        </div>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="Blog" class="mx-0 lg:mx-10 lg:mx-0 pt-5 lg:pt-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <?php get_template_part('partials/blog', 'carousel'); ?>
    </div>
</section>

<?php get_footer() ?>