<?php get_header() ?>

<!-- What We Do Hero Section -->
<section id="whatWeDoHero" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <!-- Breadcrumb -->
        <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-black dark:text-white font-semibold mb-10">
        <ol>
            <li>
            <a href="<?php echo site_url(); ?>">Home</a>
            </li>
            <span aria-hidden="true" class="breadcrumb-separator text-black dark:text-white">&gt;</span>
            <li>
            <a href="#" class="text-blue"><?php echo the_title(); ?></a>
            </li>
            </li>
        </ol>
        </nav>
        <!-- Hero Image -->
        <?php 
        $pageHero_url = get_the_post_thumbnail_url(get_the_ID(), 'page-hero'); 
        ?>
        <div class="w-full h-[430px] relative">
            <div class="pageHero_image w-full h-full rounded-2xl flex justify-center items-center" style="background-image: url('<?php echo esc_url($pageHero_url); ?>');">
                <h1 class="font-averta text-white font-bold text-5xl relative z-10"><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<!-- Page Description -->
<section id="Description" class="py-10 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="whatWeDo_heroSubtext__wrapper">
                <?php 
                $heroSubtext = get_field('whatwedo_hero_subtext');
                ?>
                <h2 class="font-averta text-black dark:text-white font-normal text-2.5xl text-center"><?php echo $heroSubtext; ?></h2>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section id="whatWeDo" class="py-20 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="servicesListing py-10 flex justify-between items-center">
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
                        <h4 class="text-white font-averta text-2xl text-start font-bold absolute bottom-5 z-10"><?php echo the_title(); ?></h4>
                        <a class="w-full h-full absolute top-0 right-0 z-20" href="<?php echo the_permalink(); ?>"></a>
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
</section>

<section id="whoWeWorkWith" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="grid grid-cols-2 gap-4">
                <!-- Content Area -->
                <div class="my-auto">
                <?php if( have_rows('what_we_do_who_we_work_with') ): ?>
                    <?php while( have_rows('what_we_do_who_we_work_with') ): the_row(); 

                    $whoWeWorkWithHeading = get_sub_field('who_we_work_with_heading');
                    $whoWeWorkWithSubtext = get_sub_field('who_we_work_with_subtext');

                    ?>

                    <h2 class="text-black dark:text-white font-averta text-xl font-bold mb-7"><?php echo $whoWeWorkWithHeading; ?></h2>
                    <p class="text-black dark:text-white font-averta text-lg font-medium leading-snug w-[80%]"><?php echo $whoWeWorkWithSubtext; ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <!-- Partners query -->
                <div class="my-auto flex justify-end">
                    <div class="">
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
                            
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'whoweworkwith-partners'); ?>

                            <div class="whatWeDo_whoWeWorkWith__card w-[645px] h-[250px] my-5 relative rounded-2xl" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                                <h4 class="text-white font-averta text-2xl text-start font-bold absolute bottom-5 left-5 z-10"><?php echo the_title(); ?></h4>
                                <a class="w-full h-full absolute top-0 right-0 z-20" href="<?php echo the_permalink(); ?>"></a>
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

<!-- Vimeo Video -->
<section id="vimeoVideo" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <?php 
                $whatWeDoVimeoVideoID = get_field('vimeo_video_section');
            ?>
            <div class="h-[400px] relative">
                <div class='embed-container'>
                    <iframe src='https://player.vimeo.com/video/<?php echo $whatWeDoVimeoVideoID; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies -->
<section id="caseStudies" class="py-24 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="grid grid-cols-3 gap-32">
            <?php 
                // Case Studies Query
                $caseStudiesArgs = array(
                    'post_type' => 'post', 
                    'posts_per_page' => 3,  
                    'orderby' => 'date',
                    'order' => 'DESC',
                );

                $caseStudiesQuery = new WP_Query($caseStudiesArgs); ?>

                <?php            
                // The Loop
                if ($caseStudiesQuery->have_posts()) :
                    while ($caseStudiesQuery->have_posts()) : $caseStudiesQuery->the_post(); ?>

                    <div class="min-h-[450px] mx-auto relative">
                        <?php the_post_thumbnail('whoweworkwith-casestudies'); ?>
                        <h4 class="text-black dark:text-white font-averta font-bold text-xl my-2 leading-snug"><?php echo the_title(); ?></h4>
                        <div class="text-black dark:text-white font-averta font-medium text-sm leading-tight">
                            <?php echo wp_trim_words(get_the_content(), 22);  ?>
                        </div>
                        <a class="w-full h-full absolute top-0 left-0 z-10" href="<?php the_permalink(); ?>"></a>
                    </div>


                <?php
                    endwhile;
                else :
                    // No posts found
                    echo 'No testimonials found';
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
        <div class="mx-10">
            <h2 class="text-white text-center font-averta text-5xl text-black font-bold mb-7">Testimonial</h2>
            <div class="grid grid-cols-2 gap-12 pt-5 pb-20">

            <?php 
            // The Query
            $projectArgs = array(
                'post_type' => 'testimonial',   // Specify the custom post type
                'posts_per_page' => 1,      // Number of posts to display
                'orderby' => 'date',        // Order by date
                'order' => 'DESC',           // Sort in descending order
            );

            $projectsQuery = new WP_Query($projectArgs); 
            
            // The Loop
            if ($projectsQuery->have_posts()) :
                while ($projectsQuery->have_posts()) : $projectsQuery->the_post(); 
                
                $vimeoVideoID = get_field('vimeo_video_id');
                ?>

                <!-- Vimeo Video -->
                <div class="testmionialVimeo_wrapper h-[400px] relative">
                    <div class='embed-container'>
                        <iframe src='https://player.vimeo.com/video/<?php echo $vimeoVideoID; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                    <a class="flex items-center w-fit text-lg font-semibold mt-5 absolute -bottom-20" type="button" href="<?php echo get_post_type_archive_link('testimonial')?>">
                        <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue dark:bg-black px-6 py-2 font-medium text-white dark:text-white text-lg"><span>Customer Stories</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>  
                    </a>
                </div>
                <!-- Content Area -->
                <div class="my-auto">
                    <h3 class="text-white text-start font-averta text-3xl text-black font-medium mb-7">Quote from testimonial</h3>
                    <?php if( have_rows('testimonial_informations') ): ?>
                        <?php while( have_rows('testimonial_informations') ): the_row();  
                        
                        $testimonialFullName = get_sub_field('testimonial_full_name');
                        $testimonialPosition = get_sub_field('testimonial_position');
                        $testimonialCompanyName = get_sub_field('testimonial_company_name');
                        ?>

                        <h5 class="text-white font-averta font-light text-lg mb-2">Full name: <span class="font-bold"><?php echo $testimonialFullName; ?></span></h5>
                        <h5 class="text-white font-averta font-light text-lg mb-2">Position: <span class="font-bold"><?php echo $testimonialPosition; ?></span></h5>
                        <h5 class="text-white font-averta font-light text-lg mb-2">Company Name: <span class="font-bold"><?php echo $testimonialCompanyName; ?></span></h5>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php
                endwhile;
            else :
                // No posts found
                echo 'No testimonials found';
            endif; 
            wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="Blog" class="pt-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <?php get_template_part('partials/blog', 'carousel'); ?>
    </div>
</section>

<?php get_footer() ?>