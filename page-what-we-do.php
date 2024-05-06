<?php get_header() ?>

<!-- What We Do Hero Section -->
<section id="whatWeDoHero" class="py-14 bg-white">
    <div class="container mx-auto">
        <!-- Breadcrumb -->
        <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-black font-semibold mb-10">
        <ol>
            <li>
            <a href=#>Home</a>
            </li>
            <span aria-hidden="true" class="breadcrumb-separator">&gt;</span>
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
<section id="Description" class="py-10 bg-white">
    <div class="container mx-auto">
        <div class="whatWeDo_heroSubtext__wrapper">
            <?php 
            $heroSubtext = get_field('whatwedo_hero_subtext');
            ?>
            <h2 class="font-averta text-black font-normal text-2.5xl text-center"><?php echo $heroSubtext; ?></h2>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section id="whatWeDo" class="py-20 bg-white">
    <div class="container mx-auto">
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
</section>

<section id="whoWeWorkWith" class="py-24 bg-white">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-4">
            <!-- Content Area -->
            <div class="my-auto">
            <?php if( have_rows('what_we_do_who_we_work_with') ): ?>
                <?php while( have_rows('what_we_do_who_we_work_with') ): the_row(); 

                $whoWeWorkWithHeading = get_sub_field('who_we_work_with_heading');
                $whoWeWorkWithSubtext = get_sub_field('who_we_work_with_subtext');

                ?>

                <h2 class="text-black font-averta text-xl font-bold mb-7"><?php echo $whoWeWorkWithHeading; ?></h2>
                <p class="font-averta text-lg font-medium leading-snug w-[80%]"><?php echo $whoWeWorkWithSubtext; ?></p>
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
</section>

<!-- Vimeo Video -->
<section id="vimeoVideo" class="py-36 bg-white">
    <div class="container mx-auto">
        <?php 
            $whatWeDoVimeoVideoID = get_field('vimeo_video_section');
        ?>
        <div class="h-[400px] relative">
            <div class='embed-container'>
                <iframe src='https://player.vimeo.com/video/<?php echo $whatWeDoVimeoVideoID; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies -->
<section id="caseStudies" class="py-36 bg-white">
    <div class="container mx-auto">
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
                    <h4 class="text-black font-averta font-bold text-xl my-2 leading-snug"><?php echo the_title(); ?></h4>
                    <div class="text-black font-averta font-medium text-sm leading-tight">
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
                    <a class="bg-white py-2 px-7 rounded-xl text-black flex items-center w-fit text-lg font-semibold mt-5 absolute -bottom-20" type="button" href="<?php echo get_post_type_archive_link('testimonial')?>">
                        <span>Customer Stories</span>
                        <svg class="ml-2" width="20" height="12" viewBox="0 0 20 12" fill="black" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_509_229)">
                            <path d="M19.3371 5.60733C19.3371 5.60733 19.3263 5.59633 19.3219 5.59193L14.0171 0.218005C13.8065 -0.0394679 13.4309 -0.0724773 13.1768 0.140983C12.9227 0.354444 12.8902 0.735152 13.1008 0.992625C13.1247 1.02123 13.1486 1.04544 13.1768 1.06965L17.4632 5.41808H1.09714C0.767086 5.41808 0.5 5.68876 0.5 6.02325C0.5 6.35775 0.767086 6.62842 1.09714 6.62842H17.4632L13.1703 10.9725C12.9466 11.2101 12.9466 11.5864 13.1703 11.8241C13.4026 12.0596 13.7761 12.0596 14.0085 11.8241L19.3176 6.44137C19.5499 6.2147 19.5565 5.8406 19.3328 5.60513L19.3371 5.60733Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_509_229">
                            <rect width="19" height="12" fill="black" transform="translate(0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>    
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
<section id="Blog" class="pt-14 bg-white">
    <div class="container mx-auto">
        <div class="mx-10">
            <h3 class="text-start text-black font-averta text-2xl font-bold">Insights & Events</h3>
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


            <div class="owl-blog owl-carousel owl-theme my-8">
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
                                echo '<span class="bg-blue py-1 px-3 rounded-lg text-white inline items-center text-medium font-normal">' . esc_html( $category->name ) . '</span>';
                            }
                            ?>
                        </div>
                        <h4 class="text-black font-averta font-bold text-lg mb-2"><?php echo the_title(); ?></h4>
                        <div class="text-black font-averta font-medium text-sm leading-tight">
                            <?php echo wp_trim_words(get_the_content(), 22);  ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0"></a>
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

<?php get_footer() ?>