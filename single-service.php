<?php get_header(); 

$singleService_url = get_the_post_thumbnail_url(get_the_ID(), 'singleService-hero'); 
?>

<!-- Hero Section -->
<section id="singleServiceHero" class="h-[500px] w-full relative bg-white dark:bg-zinc-800">
    <div class="w-full h-full singleServiceHero_wrapper py-14" style="background-image: url('<?php echo esc_url($singleService_url); ?>');">
        <div class="container mx-auto">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs_wrapper relative z-10">
                <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-xs sm:text-sm text-white font-light mb-10">
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
            <div class="relative z-10 pt-14">
                <h1 class="font-averta text-white font-bold text-4xl sm:text-6xl lg:w-[40%] leading-tight mb-7"><?php echo the_title(); ?></h1>
                <a href="<?php echo site_url('/contact-us')?>">
                    <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-white px-6 py-2 font-medium text-black text-sm sm:text-lg"><span>Speak To An Expert</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Hero Content Section -->
<section id="singleServiceHeroContent" class="py-10 lg:py-24 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <?php if( have_rows('wwd_hero_content') ): ?>
            <?php while( have_rows('wwd_hero_content') ): the_row(); 

            $wwdHeroHeading = get_sub_field('wwd_hero_heading');
            $wwdHeroSubtext = get_sub_field('wwd_hero_subtext');
            ?>

            <h2 class="font-averta text-black dark:text-white font-bold text-2.5xl text-center my-6"><?php echo $wwdHeroHeading; ?></h2>
            <div class="flex justify-center">
                <p class="text-black dark:text-white font-averta text-center font-medium text-1xlg sm:text-1xl lg:w-[80%] leading-tight"><?php echo $wwdHeroSubtext; ?></p>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<!-- What That Looks Like Section -->
<section id="singleServiceWTLL" class="pt-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <h2 class="text-black dark:text-white font-averta text-center font-bold text-1xl mb-10">What that looks like</h2>
        <div class="lg:grid lg:grid-cols-3 gap-4">
        <?php $i = 1; ?>
        <?php if( have_rows('wwd_what_that_looks_like') ): ?>
            <?php while( have_rows('wwd_what_that_looks_like') ): the_row(); 
            
            $wtllCardName = get_sub_field('wwd_what_that_looks_like_card_name');
            ?>

            <div class="wttlCard_wrapper bg-blue flex justify-start items-center py-3 px-7 min-h-[120px] rounded-2xl mb-5 lg:mb-0">
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

<!-- Single Service Content -->
<section id="serviceContent" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <!-- Approach Section -->
        <div class="pt-0 lg:pt-36 pb-14">
            <div class="lg:grid lg:grid-cols-2 gap-4">
                <!-- Content -->
                <div class="my-auto">
                <?php if( have_rows('wwd_approach') ): ?>
                    <?php while( have_rows('wwd_approach') ): the_row(); ?>
                        <?php if( have_rows('wwd_approach_content') ): ?>
                            <?php while( have_rows('wwd_approach_content') ): the_row(); 

                            $approachHeading = get_sub_field('wwd_approach_content_heading');
                            $approachSubtext = get_sub_field('wwd_approach_content_subtext');

                            ?>

                            <div class="approachContent_wrapper text-center lg:text-start">
                                <span class="text-blue font-averta font-bold text-lg">Approach</span>
                                <h2 class="text-black dark:text-white font-averta font-bold text-2xl my-4"><?php echo $approachHeading; ?></h2>
                                <div class="text-start text-black dark:text-white font-averta text-sm font-medium leading-snug"><?php echo $approachSubtext; ?></div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                            </div>
                            <!-- Image -->
                            <div class="approachImage_wrapper flex justify-end mt-10 lg:mt-0">
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
        <!-- Use Cases Section -->
        <div class="py-5 lg:py-24">
            <h2 class="text-black dark:text-white font-averta text-center font-bold text-1xl mb-10">Some Use Cases</h2>
            <div class="lg:grid grid-cols-3 gap-4">
                <?php if( have_rows('wwd_use_cases') ): ?>
                    <?php while( have_rows('wwd_use_cases') ): the_row(); 
                    
                    $useCaseHeading = get_sub_field('wwd_use_case_heading');
                    $useCaseSubtext = get_sub_field('wwd_use_case_subtext');
                    ?>

                    <div class="useCase_card bg-black p-5 rounded-xl min-h-[210px] mb-5 lg:mb-0">
                        <h4 class="text-white font-averta font-bold text-xl text-center mb-3"><?php echo $useCaseHeading; ?></h4>
                        <p class="font-averta text-white text-center text-sm font-medium leading-snug"><?php echo $useCaseSubtext; ?></p>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- Why Feynic Section -->
        <div class="py-5 lg:py-24">
            <div class="lg:grid grid-cols-2 gap-24">
                <?php if( have_rows('why_feynic_group') ): ?>
                    <?php while( have_rows('why_feynic_group') ): the_row(); 

                    $whyFeynicText = get_sub_field('why_feynic_text');
                    $whyFeynicVimeoID = get_sub_field('vimeo_video_id');
                    ?>
                        <!-- Text Area -->
                        <div class="text-black dark:text-white font-averta text-lg font-normal my-auto">
                            <h2 class="text-black dark:text-white font-averta font-bold text-xl mb-7">Why Choose <span class="blue_font">Feynic</span>?</h4>
                            <div class="text-sm lg:text-lg">
                                <?php echo $whyFeynicText; ?>
                            </div>
                        </div>
                        <!-- Vimeo Video -->
                        <div class="testmionialVimeo_wrapper h-[250px] lg:h-[400px] relative my-auto">
                            <div class='embed-container'>
                                <iframe src='https://player.vimeo.com/video/<?php echo $whyFeynicVimeoID ; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Get in Touch -->
<section id="getInTouch" class="py-24 bg-black">
    <div class="container mx-auto">
        <div class="getInTouch_wrapper">
            <h3 class="text-white font-averta text-center font-bold text-xl mb-6">Have any questions?</h3>
            <div class="flex justify-center">
                <a href="<?php echo site_url('/contact-us')?>">
                    <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-6 py-2 font-medium text-white text-sm sm:text-lg"><span>Get In Touch</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<section id="relatedProjects" class="lg:py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <!-- Spotlight Content -->
        <div class="py-10 lg:py-36">
            <div class="grid lg:grid-cols-2 gap-4">
                <?php if( have_rows('wwd_spotlight_section') ): ?>
                    <?php while( have_rows('wwd_spotlight_section') ): the_row(); ?>

                    <!-- Content -->
                    <div class="my-auto order-2 lg:order-1">
                    <?php if( have_rows('wwd_spotlight_section_content') ): ?>
                        <?php while( have_rows('wwd_spotlight_section_content') ): the_row(); 
                        
                        $spotlightContentHeading = get_sub_field('wwd_spotlight_section_heading');
                        $spotlighContentDescription = get_sub_field('wwd_spotlight_section_subtext');
                        ?>

                        <h2 class="text-black dark:text-white font-averta font-bold text-2xl my-4"><?php echo $spotlightContentHeading; ?></h2>
                        <div class="text-black dark:text-white font-averta text-sm font-medium leading-snug"><?php echo $spotlighContentDescription; ?></div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <!-- Image -->
                    <div class="spotlightContent_image flex justify-end mt-5 lg:mt-0">
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

        <div class="lg:mx-24 relatedProjectsWrapper">
            <div class="lg:grid grid-cols-2 gap-4">
                <?php foreach($relatedProjects as $relatedProejct): 
                    
                    $relatedProjectExcerptText = get_field('single_project_excerpt_text', $relatedProejct->ID);?>

                    <div class="relatedProjectPost_wrapper lg:p-14 mb-10 lg:mb-0">
                        <img src="<?php echo get_the_post_thumbnail_url($relatedProejct->ID, 'related-project'); ?>" alt="">
                        <h2 class="text-black dark:text-white font-averta font-bold text-2xl mt-4"><?php echo $relatedProejct->post_title; ?></h2>
                        <p class="text-black dark:text-white font-averta text-sm font-medium leading-snug my-4"><?php echo wp_trim_words($relatedProjectExcerptText); ?></p>  
                        <a href="<?php echo get_page_link($relatedProejct->ID) ?>">
                            <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-6 py-2 font-medium text-white dark:text-black text-sm sm:text-lg"><span>Read Case Study</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
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
        <div class="lg:mx-10">
            <h2 class="text-white text-center font-averta text-2xl sm:text-5xl text-black font-bold mb-7">Testimonial</h2>
            <?php foreach ($relatedTestimonials as $post): 
                
                    $relatedTestmionialVimeoID = get_field('vimeo_video_id', $post->ID);
                    ?>
                    <div class="grid lg:grid-cols-2 gap-12 pt-5 lg:pb-20">
                        <!-- Vimeo Video -->
                        <div class="testmionialVimeo_wrapper h-[250px] lg:h-[400px] relative">
                            <div class='embed-container'>
                                <iframe src='https://player.vimeo.com/video/<?php echo $relatedTestmionialVimeoID; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                            <a class="hidden lg:block absolute -bottom-20" href="<?php echo get_page_link($post->ID) ?>">
                                <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-white dark:bg-black px-6 py-2 font-medium text-black dark:text-white text-lg"><span>Read Customer Story</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                            </a>
                        </div>
                        <!-- Content Area -->
                        <?php 
                        // Set up post data
                        setup_postdata($post);
                        ?>
                        <div class="my-auto">
                            <h3 class="text-white text-center lg:text-start font-averta text-lg lg:text-3xl text-black font-medium mb-7">Quote from testimonial</h3>
                            <?php if( have_rows('testimonial_informations') ): ?>
                                <?php while( have_rows('testimonial_informations') ): the_row();  
                                
                                $testimonialFullName = get_sub_field('testimonial_full_name');
                                $testimonialPosition = get_sub_field('testimonial_position');
                                $testimonialCompanyName = get_sub_field('testimonial_company_name');
                                ?>

                                <h5 class="text-center lg:text-start text-white font-averta font-light text-lg mb-2">Full name: <span class="font-bold"><?php echo $testimonialFullName; ?></span></h5>
                                <h5 class="text-center lg:text-start text-white font-averta font-light text-lg mb-2">Position: <span class="font-bold"><?php echo $testimonialPosition; ?></span></h5>
                                <h5 class="text-center lg:text-start text-white font-averta font-light text-lg mb-2">Company Name: <span class="font-bold"><?php echo $testimonialCompanyName; ?></span></h5>

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
<section id="Blog" class="mx-10 lg:mx-0 pt-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <?php get_template_part('partials/blog', 'carousel'); ?>
    </div>
</section>

<?php get_footer(); ?>