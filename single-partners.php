<?php get_header(); 

$singlePartner_url = get_the_post_thumbnail_url(get_the_ID(), 'singleService-hero'); 
$singlePartnerHeroText = get_field('wwww_hero_description');
?>


<!-- Hero Section -->
<section id="singlePartnerHero" class="h-[550px] w-full relative">
    <div class="w-full h-full singlePartnerHero_wrapper py-14" style="background-image: url('<?php echo esc_url($singlePartner_url); ?>');">
        <div class="container mx-auto">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs_wrapper relative z-10">
                <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-white font-light mb-10">
                    <ol>
                        <li>
                        <a href="<?php echo site_url(); ?>">Home</a>
                        </li>
                        <span aria-hidden="true" class="breadcrumb-separator-white">&gt;</span>
                        <li>
                        <a href="<?php echo site_url('/what-we-do')?>">What we Do</a>
                        </li>
                        <span aria-hidden="true" class="breadcrumb-separator-white">&gt;</span>
                        <li>
                        <a href="<?php echo the_permalink(); ?>" class="text-white font-medium"><span>for </span><?php echo the_title(); ?></a>
                        </li>
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- Content -->
            <div class="relative z-10">
                <h4 class="font-averta text-white font-light text-1xl">Feynic For</h4>
                <h1 class="font-averta text-white font-bold text-6xl leading-none mb-4"><?php echo the_title(); ?></h1>
                <h4 class="font-averta text-white font-light text-lg w-[38%]"><?php echo $singlePartnerHeroText; ?></h4>
                <a class="bg-white py-2 px-5 rounded-xl text-black font-averta font-bold flex items-center w-fit mt-7" href="<?php echo site_url('/contact-us')?>" type="button">
                <span>Get In Touch With Us</span>
                <svg class="mt-1 ml-2" width="20" height="12" viewBox="0 0 20 12" fill="black" xmlns="http://www.w3.org/2000/svg">
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
        </div>
    </div>
</section>

<!-- Hero Content Section -->
<section id="singlePartnerHeroContent" class="py-36 bg-white">
    <div class="container mx-auto">
        <?php if( have_rows('wwww_hero_subtext') ): ?>
            <?php while( have_rows('wwww_hero_subtext') ): the_row(); 

            $wwwwHeroHeading = get_sub_field('wwww_hero_subtext_heading');
            $wwwwHeroSubtext = get_sub_field('wwww_hero_subtext_subtext');
            ?>

            <h2 class="font-averta text-black font-bold text-2.5xl text-center my-6"><?php echo $wwwwHeroHeading; ?></h2>
            <div class="flex justify-center">
                <p class="text-black font-averta text-center font-medium text-1xl w-[80%] leading-tight"><?php echo $wwwwHeroSubtext; ?></p>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<!-- How We Help -->
<section id="howWeHelp" class="py-24 bg-white">
    <div class="container mx-auto">
        <h2 class="font-averta text-black font-bold text-2.5xl text-center mb-10">How We Help <span class="blue_font"><?php echo the_title(); ?></span></h2>
        <div class="grid grid-cols-3 gap-4">
            <?php $i = 1; ?>
            <?php if( have_rows('wwww_how_we_help') ): ?>
                <?php while( have_rows('wwww_how_we_help') ): the_row(); 

                $howWeHelpTitle = get_sub_field('wwww_who_we_help_title');
                $howWeHelpDescription = get_sub_field('wwww_who_we_help_description');
                ?>

                    <!-- How We Help Cards -->
                    <div class="howWeHelpCards bg-black py-8 px-9 my-3 rounded-2xl flex">
                        <div class="objectiveCard_number mr-4 mt-3">
                            <span class="text-black text-1xl font-bold bg-white py-0.5 px-4"><?php echo $i; ?></span>
                        </div>
                        <div class="objectiveCard_content">
                            <h3 class="text-white text-xl font-averta font-bold mb-2 w-[50%]"><?php echo $howWeHelpTitle; ?></h3>
                            <div class="text-white text-normal font-averta">
                                <?php echo $howWeHelpDescription; ?>
                                <?php $i++; ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Guidance for Growth -->
<section id="guidanceForGrowth" class="py-14 bg-black">
    <div class="container mx-auto">
    <?php if( have_rows('wwww_guidance_to_growth') ): ?>
        <?php while( have_rows('wwww_guidance_to_growth') ): the_row(); ?>
            <div class="grid grid-cols-6 gap-4">
                <!-- Content -->
                <div class="col-span-4 my-auto w-[80%]">
                <?php if( have_rows('wwww_guidance_to_growth_content') ): ?>
                    <?php while( have_rows('wwww_guidance_to_growth_content') ): the_row(); 
                    
                    $guidanceForGrowthHeading = get_sub_field('wwww_guidance_to_growth_content_heading');
                    $guidanceForGrowthDescription = get_sub_field('wwww_guidance_to_growth_content_description');
                    ?>

                    <h2 class="font-averta text-white text-3xl font-normal mb-6"><?php echo $guidanceForGrowthHeading; ?></h2>
                    <div class="font-averta text-white text-lg font-light mb-6">
                        <?php echo $guidanceForGrowthDescription; ?>
                    </div>
                    <a class="bg-blue py-2 px-7 rounded-xl text-white flex items-center w-fit text-sm font-semibold" type="button" href="<?php echo site_url('/contact-us')?>">
                    <span>Explore Customer Stories</span>
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
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <!-- Image -->
                <div class="guidanceForGrowthImage_wrapper col-span-2">
                    <?php 
                    $guidanceForGrowthImage = get_sub_field('wwww_guidance_to_growth_image');
                    $guidanceForGrowthSize = 'guidancefor-growth'; // (thumbnail, medium, large, full or custom size)
                        if( $guidanceForGrowthImage ) {
                            echo wp_get_attachment_image( $guidanceForGrowthImage, $guidanceForGrowthSize );
                        }
                    ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>

<!-- Strategic Initiative -->
<section id="strategicInititative" class="py-14 bg-white">
    <div class="container mx-auto">
        <h2 class="text-black font-averta text-center font-bold text-1xl mb-10">Why <?php echo the_title(); ?> work with us</h2>
        <div class="grid grid-cols-3 gap-4">
        <?php if( have_rows('wwww_strategic_initiatives_cards') ): ?>
            <?php while( have_rows('wwww_strategic_initiatives_cards') ): the_row(); 
            
            $strategicInititativeHeading = get_sub_field('wwww_strategic_initiatives_cards_heading');
            $strategicInititativeDescription = get_sub_field('wwww_strategic_initiatives_cards_description');
            ?>

            <div class="bg-blue rounded-xl text-center p-5 min-h-[230px]">
                <h4 class="text-white font-averta text-xl font-bold mb-6"><?php echo $strategicInititativeHeading; ?></h4>
                <p class="text-white text-normal font-averta"><?php echo $strategicInititativeDescription; ?></p>
            </div>

            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<!-- Expertise Domains -->
<section id="expertiseDomains" class="py-24 bg-white">
    <div class="container mx-auto">
    <?php if( have_rows('wwww_expertise_domains') ): ?>
        <?php while( have_rows('wwww_expertise_domains') ): the_row(); ?>
        <div class="grid grid-cols-2 gap-4">
            <?php if( have_rows('wwww_expertise_domains_core_values') ): ?>
                <?php while( have_rows('wwww_expertise_domains_core_values') ): the_row(); 
                
                $coreValuesTitle = get_sub_field('wwww_expertise_domains_core_values_title');
                ?>
                <!-- Core Values -->
                <div class="">
                    <h2 class="text-black font-averta font-bold text-xl"><?php echo $coreValuesTitle; ?></h2>
                    <!-- Card Repeater -->
                    <?php if( have_rows('wwww_expertise_domains_core_values_core_value_cards') ): ?>
                        <?php while( have_rows('wwww_expertise_domains_core_values_core_value_cards') ): the_row(); 
                        
                        $coreValueCardHeading = get_sub_field('wwww_expertise_domains_core_values_core_value_cards_heading');
                        $coreValueCardDescription = get_sub_field('wwww_expertise_domains_core_values_core_value_cards_description');
                        ?>

                        <div class="expertiseCard_wrapper bg-brown my-6 px-10 py-7 rounded-xl">
                            <h4 class="text-black font-averta text-2xlg font-bold"><?php echo $coreValueCardHeading; ?></h4>
                            <p class="font-averta text-black text-sm font-medium leading-snug"><?php echo $coreValueCardDescription; ?></p>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
                <!-- Specialization content -->
                <div class="my-auto ml-20">
                    <div class="specializationContent_wrapper font-averta text-black text-lg font-medium mb-10">
                        <?php 
                            $specializationContent = get_sub_field('wwww_expertise_domains_specializations_text');
                            echo $specializationContent;
                        ?>
                    </div>
                    <a class="bg-blue py-2 px-7 rounded-xl text-white flex items-center text-base font-semibold w-fit" type="button" href="<?php echo site_url('/contact-us')?>">
                    <span>Get In Touch</span>
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
            </div>
            <!-- Spotlight Content -->
            <div class="py-36">
                <div class="grid grid-cols-2 gap-4">
                    <?php if( have_rows('wwww_expertise_domains_core_values_spotlight_section') ): ?>
                        <?php while( have_rows('wwww_expertise_domains_core_values_spotlight_section') ): the_row(); ?>

                        <!-- Content -->
                        <div class="my-auto">
                        <?php if( have_rows('wwww_expertise_domains_core_values_spotlight_section_content') ): ?>
                            <?php while( have_rows('wwww_expertise_domains_core_values_spotlight_section_content') ): the_row(); 
                            
                            $spotlightContentHeading = get_sub_field('wwww_expertise_domains_core_values_spotlight_section_heading');
                            $spotlighContentDescription = get_sub_field('wwww_expertise_domains_core_values_spotlight_section_subtext');
                            ?>

                            <h2 class="text-black font-averta font-bold text-2xl my-4"><?php echo $spotlightContentHeading; ?></h2>
                            <p class="font-averta text-sm font-medium leading-snug"><?php echo $spotlighContentDescription; ?></p>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        <!-- Image -->
                        <div class="spotlightContent_image flex justify-end">
                            <?php 
                            $spotlightImage = get_sub_field('wwww_expertise_domains_core_values_spotlight_section_image');
                            $spotlightImageSize = 'approach-thumbnail';
                                if( $spotlightImage ) {
                                    echo wp_get_attachment_image( $spotlightImage, $spotlightImageSize );
                                }
                            ?>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
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


<?php get_footer(); ?>