<?php get_header(); 

$singleService_url = get_the_post_thumbnail_url(get_the_ID(), 'singleService-hero'); 
?>

<!-- Hero Section -->
<section id="singleServiceHero" class="h-[550px] w-full relative">
    <div class="w-full h-full singleServiceHero_wrapper py-14" style="background-image: url('<?php echo esc_url($singleService_url); ?>');">
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
                        <a href="<?php echo the_permalink(); ?>" class="text-white font-medium"><?php echo the_title(); ?></a>
                        </li>
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- Content -->
            <div class="relative z-10">
                <h1 class="font-averta text-white font-bold text-6xl w-[40%] leading-tight"><?php echo the_title(); ?></h1>
                <a class="bg-white py-2 px-5 rounded-xl text-black font-averta font-bold flex items-center w-fit mt-7" href="<?php echo site_url('/contact-us')?>" type="button">
                <span>Speak To An Expert</span>
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
<section id="singleServiceHeroContent" class="py-36 bg-white">
    <div class="container mx-auto">
        <?php if( have_rows('wwd_hero_content') ): ?>
            <?php while( have_rows('wwd_hero_content') ): the_row(); 

            $wwdHeroHeading = get_sub_field('wwd_hero_heading');
            $wwdHeroSubtext = get_sub_field('wwd_hero_subtext');
            ?>

            <h2 class="font-averta text-black font-bold text-2.5xl text-center my-6"><?php echo $wwdHeroHeading; ?></h2>
            <div class="flex justify-center">
                <p class="text-black font-averta text-center font-medium text-1xl w-[80%] leading-tight"><?php echo $wwdHeroSubtext; ?></p>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<!-- What That Looks Like Section -->
<section id="singleServiceWTLL" class="py-14 bg-white">
    <div class="container mx-auto">
        <h2 class="text-black font-averta text-center font-bold text-1xl mb-10">What that looks like</h2>
        <div class="grid grid-cols-3 gap-4">
        <?php $i = 1; ?>
        <?php if( have_rows('wwd_what_that_looks_like') ): ?>
            <?php while( have_rows('wwd_what_that_looks_like') ): the_row(); 
            
            $wtllCardName = get_sub_field('wwd_what_that_looks_like_card_name');
            ?>

            <div class="wttlCard_wrapper bg-blue flex justify-start items-center py-3 px-7 min-h-[120px] rounded-2xl">
                <div class="objectiveCard_number mr-4">
                    <span class="text-blue text-xl font-bold bg-white py-1 px-4"><?php echo $i; ?></span>
                </div>
                <h4 class="font-averta font-bold text-1xl text-white leading-9"><?php echo $wtllCardName; ?></h4>
                <?php $i++; ?>
            </div>

            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<!-- Approach Section -->
<section id="singleServiceApproach" class="py-36 bg-white">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-4">
            <!-- Content -->
            <div class="my-auto">
            <?php if( have_rows('wwd_approach') ): ?>
                <?php while( have_rows('wwd_approach') ): the_row(); ?>
                    <?php if( have_rows('wwd_approach_content') ): ?>
                        <?php while( have_rows('wwd_approach_content') ): the_row(); 

                        $approachHeading = get_sub_field('wwd_approach_content_heading');
                        $approachSubtext = get_sub_field('wwd_approach_content_subtext');

                        ?>

                        <div class="approachContent_wrapper">
                            <span class="text-blue font-averta font-bold text-lg">Approach</span>
                            <h2 class="text-black font-averta font-bold text-2xl my-4"><?php echo $approachHeading; ?></h2>
                            <p class="font-averta text-sm font-medium leading-snug"><?php echo $approachSubtext; ?></p>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>


                        </div>
                        <!-- Image -->
                        <div class="approachImage_wrapper flex justify-end">
                            <?php 
                                $approachImage = get_sub_field('wwd_approach_thumbnail');
                                $approachImageSize = 'approach-thumbnail'; // (thumbnail, medium, large, full or custom size)
                                if( $approachImage ) {
                                    echo wp_get_attachment_image( $approachImage, $approachImageSize );
                                }
                            ?>
                        </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Use Cases Section -->
<section id="useCases" class="py-36 bg-white">
    <div class="container mx-auto">
        <h2 class="text-black font-averta text-center font-bold text-1xl mb-10">Some Use Cases</h2>
        <div class="grid grid-cols-3 gap-4">
            <?php if( have_rows('wwd_use_cases') ): ?>
                <?php while( have_rows('wwd_use_cases') ): the_row(); 
                
                $useCaseHeading = get_sub_field('wwd_use_case_heading');
                $useCaseSubtext = get_sub_field('wwd_use_case_subtext');
                ?>

                <div class="useCase_card bg-black p-5 rounded-xl min-h-[210px]">
                    <h4 class="text-white font-averta font-bold text-xl text-center mb-3"><?php echo $useCaseHeading; ?></h4>
                    <p class="font-averta text-white text-center text-sm font-medium leading-snug"><?php echo $useCaseSubtext; ?></p>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Why Feynic Section -->
<section id="whyFeynic" class="py-36 bg-white">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-24">
            <?php if( have_rows('why_feynic_group') ): ?>
                <?php while( have_rows('why_feynic_group') ): the_row(); 

                $whyFeynicText = get_sub_field('why_feynic_text');
                ?>
                    <!-- Text Area -->
                    <div class="text-black font-averta text-lg font-normal my-auto">
                        <?php echo $whyFeynicText; ?>
                    </div>
                    <!-- Expertise Repeater -->
                    <div class="">
                    <h2 class="text-black font-averta font-bold text-xl">Why Choose <span class="blue_font">Feynic</span>?</h4>
                    <?php if( have_rows('why_feynic_expertise_cards') ): ?>
                        <?php while( have_rows('why_feynic_expertise_cards') ): the_row(); 
                        
                        $expertiseCardTitle = get_sub_field('why_feynic_expertise_cards_title');
                        $expertiseCardDescription = get_sub_field('why_feynic_expertise_cards_description');
                        ?>

                        <div class="expertiseCard_wrapper bg-brown my-6 px-10 py-7 rounded-xl">
                            <h4 class="text-black font-averta text-2xlg font-bold"><?php echo $expertiseCardTitle; ?></h4>
                            <p class="font-averta text-black text-sm font-medium leading-snug"><?php echo $expertiseCardDescription; ?></p>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Get in Touch -->
<section id="getInTouch" class="py-24 bg-black">
    <div class="container mx-auto">
        <div class="getInTouch_wrapper">
            <h3 class="text-white font-averta text-center font-bold text-xl mb-6">Have any questions?</h3>
            <div class="flex justify-center">
                <a class="bg-blue py-2 px-7 rounded-xl text-white flex items-center text-base font-semibold" type="button" href="<?php echo site_url('/contact-us')?>">
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
    </div>
</section>

<section id="relatedProjects" class="py-14 bg-white">
    <div class="container mx-auto">
        <!-- Spotlight Content -->
        <div class="py-36">
            <div class="grid grid-cols-2 gap-4">
                <?php if( have_rows('wwd_spotlight_section') ): ?>
                    <?php while( have_rows('wwd_spotlight_section') ): the_row(); ?>

                    <!-- Content -->
                    <div class="my-auto">
                    <?php if( have_rows('wwd_spotlight_section_content') ): ?>
                        <?php while( have_rows('wwd_spotlight_section_content') ): the_row(); 
                        
                        $spotlightContentHeading = get_sub_field('wwd_spotlight_section_heading');
                        $spotlighContentDescription = get_sub_field('wwd_spotlight_section_subtext');
                        ?>

                        <h2 class="text-black font-averta font-bold text-2xl my-4"><?php echo $spotlightContentHeading; ?></h2>
                        <p class="font-averta text-sm font-medium leading-snug"><?php echo $spotlighContentDescription; ?></p>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <!-- Image -->
                    <div class="spotlightContent_image flex justify-end">
                        <?php 
                        $spotlightImage = get_sub_field('wwd_spotlight_section_image');
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
        <!-- Related projects section -->
        <?php
        $relatedProjects = get_field('wwd_projects_relationship_fields'); 
        
        if($relatedProjects) { ?>

        <div class="mx-24 relatedProjectsWrapper">
            <div class="grid grid-cols-2 gap-4">
                <?php foreach($relatedProjects as $relatedProejct): 
                    
                    $relatedProjectExcerptText = get_field('single_project_excerpt_text', $relatedProejct->ID);?>

                    <div class="relatedProjectPost_wrapper p-14">
                        <img src="<?php echo get_the_post_thumbnail_url($relatedProejct->ID, 'related-project'); ?>" alt="">
                        <h2 class="text-black font-averta font-bold text-2xl mt-4"><?php echo $relatedProejct->post_title; ?></h2>
                        <p class="font-averta text-sm font-medium leading-snug my-4"><?php echo wp_trim_words($relatedProjectExcerptText); ?></p>
                        <a class="bg-blue py-2 px-7 rounded-xl text-white flex items-center text-base font-semibold w-fit" type="button" href="<?php echo get_page_link($relatedProejct->ID) ?>">
                        <span>Read Case Study</span>
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
                <?php endforeach; ?>
            </div>
            <?php }
            ?>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<?php $relatedTestimonials = get_field('wwd_relationship_field_for_testimonial'); 
if($relatedTestimonials) {?>

<section id="testimonial" class="bg-blue py-14">
    <div class="container mx-auto">
        <div class="mx-10">
            <h2 class="text-white text-center font-averta text-5xl text-black font-bold mb-7">Testimonial</h2>
            <?php foreach ($relatedTestimonials as $post): 
                
                    $relatedTestmionialVimeoID = get_field('vimeo_video_id', $post->ID);
                    ?>
                    <div class="grid grid-cols-2 gap-12 pt-5 pb-20">
                        <!-- Vimeo Video -->
                        <div class="testmionialVimeo_wrapper h-[400px] relative">
                            <div class='embed-container'>
                                <iframe src='https://player.vimeo.com/video/<?php echo $relatedTestmionialVimeoID; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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
                        <?php 
                        // Set up post data
                        setup_postdata($post);
                        ?>
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
                    </div>
                <?php endforeach; 
                
                wp_reset_postdata();?>
        </div>
    </div>
</section>
<?php }?>


<!-- Blog Section -->
<section id="Blog" class="pt-14 bg-white">
    <div class="container mx-auto">
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
                echo 'No testimonials found';
            endif; 
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>