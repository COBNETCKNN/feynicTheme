<?php get_header(); 

$singlePartner_url = get_the_post_thumbnail_url(get_the_ID(), 'singleService-hero'); 
$singlePartnerHeroText = get_field('wwww_hero_description');
?>


<!-- Hero Section -->
<section id="singlePartnerHero" class="h-[500px] w-full relative bg-white dark:bg-zinc-800">
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
                        <a href="<?php echo site_url('/who-we-work-with')?>">Who We Work With</a>
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
            <div class="relative z-10 pt-7">
                <h4 class="font-averta text-white font-light text-1xl">Feynic For</h4>
                <h1 class="font-averta text-white font-bold text-6xl leading-none mb-4"><?php echo the_title(); ?></h1>
                <h4 class="font-averta text-white font-light text-lg w-[38%]"><?php echo $singlePartnerHeroText; ?></h4>
                <a class="absolute -bottom-20" href="<?php echo site_url('/contact-us')?>">
                    <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-white px-6 py-2 font-medium text-black text-lg"><span>Get In Touch With Us</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Hero Content Section -->
<section id="singlePartnerHeroContent" class="py-24 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <?php if( have_rows('wwww_hero_subtext') ): ?>
                <?php while( have_rows('wwww_hero_subtext') ): the_row(); 

                $wwwwHeroHeading = get_sub_field('wwww_hero_subtext_heading');
                $wwwwHeroSubtext = get_sub_field('wwww_hero_subtext_subtext');
                ?>

                <h2 class="font-averta text-black dark:text-white font-bold text-2.5xl text-center my-6"><?php echo $wwwwHeroHeading; ?></h2>
                <div class="flex justify-center">
                    <p class="text-black dark:text-white font-averta text-center font-medium text-1xl w-[80%] leading-tight"><?php echo $wwwwHeroSubtext; ?></p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- How We Help -->
<section id="howWeHelp" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <h2 class="font-averta text-black dark:text-white font-bold text-2.5xl text-center mb-10">How We Help <span class="blue_font"><?php echo the_title(); ?></span></h2>
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
                                <h3 class="text-white text-xl font-averta font-bold mb-2"><?php echo $howWeHelpTitle; ?></h3>
                                <div class="text-white text-normal font-averta text-sm">
                                    <?php echo $howWeHelpDescription; ?>
                                    <?php $i++; ?>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Guidance for Growth -->
<section id="guidanceForGrowth" class="py-14 bg-black">
    <div class="container mx-auto">
        <div class="mx-10">
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
                        <div class="font-averta text-white text-sm font-light mb-8">
                            <?php echo $guidanceForGrowthDescription; ?>
                        </div>
                        <a  href="<?php echo get_post_type_archive_link('testimonial');?>">
                            <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-6 py-2 font-medium text-white text-lg"><span>Explore Customer Stories</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
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
    </div>
</section>

<!-- Strategic Initiative -->
<section id="strategicInititative" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="pb-14">
                <h2 class="text-black dark:text-white font-averta text-center font-bold text-1xl mb-10">Why <?php echo the_title(); ?> work with us</h2>
                <div class="grid grid-cols-3 gap-4">
                <?php if( have_rows('wwww_strategic_initiatives_cards') ): ?>
                    <?php while( have_rows('wwww_strategic_initiatives_cards') ): the_row(); 
                    
                    $strategicInititativeHeading = get_sub_field('wwww_strategic_initiatives_cards_heading');
                    $strategicInititativeDescription = get_sub_field('wwww_strategic_initiatives_cards_description');
                    ?>

                    <div class="bg-blue rounded-xl text-center p-5 min-h-[230px]">
                        <h4 class="text-white font-averta text-xl font-bold mb-6"><?php echo $strategicInititativeHeading; ?></h4>
                        <p class="text-white text-normal font-averta text-sm"><?php echo $strategicInititativeDescription; ?></p>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
            <!-- Expertise Domains -->
            <div class="py-24">
                <?php if( have_rows('wwww_expertise_domains') ): ?>
                    <?php while( have_rows('wwww_expertise_domains') ): the_row(); ?>
                        <?php if( have_rows('wwww_expertise_domains_core_values') ): ?>
                            <?php while( have_rows('wwww_expertise_domains_core_values') ): the_row(); 
                            
                            $coreValuesTitle = get_sub_field('wwww_expertise_domains_core_values_title');
                            ?>
                            <h2 class="text-black dark:text-white font-averta font-bold text-xl"><?php echo $coreValuesTitle; ?></h2>
                            <div class="grid grid-cols-2 gap-4">

                                    <!-- Core Values -->
                                    <div class="">

                                        <!-- Card Repeater -->
                                        <?php if( have_rows('wwww_expertise_domains_core_values_core_value_cards') ): ?>
                                            <?php while( have_rows('wwww_expertise_domains_core_values_core_value_cards') ): the_row(); 
                                            
                                            $coreValueCardHeading = get_sub_field('wwww_expertise_domains_core_values_core_value_cards_heading');
                                            $coreValueCardDescription = get_sub_field('wwww_expertise_domains_core_values_core_value_cards_description');
                                            ?>

                                            <div class="expertiseCard_wrapper bg-brown dark:bg-blue my-6 px-10 py-7 rounded-xl">
                                                <h4 class="text-black dark:text-white font-averta text-2xlg font-bold"><?php echo $coreValueCardHeading; ?></h4>
                                                <p class="font-averta text-black dark:text-white text-sm font-medium leading-snug"><?php echo $coreValueCardDescription; ?></p>
                                            </div>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                    <!-- Specialization content -->
                                    <div class="my-auto ml-20 my-auto">
                                        <div class="specializationContent_wrapper font-averta text-black text-lg font-medium mb-7">
                                            <?php 
                                                $specializationImage = get_sub_field('wwww_expertise_domains_specializations_image');
                                                $specializationImageSize = 'approach-thumbnail';

                                                if( $specializationImage ) {
                                                    echo wp_get_attachment_image( $specializationImage, $specializationImageSize );
                                                }
                                            ?>
                                        </div>
                                        <a href="<?php echo site_url('/contact-us')?>">
                                            <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-6 py-2 font-medium text-white text-sm"><span>Get In Touch</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                                        </a>
                                    </div>
                                </div>
                        <!-- Spotlight Content -->
                        <div class="pt-36 pb-0">
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

                                        <h2 class="text-black dark:text-white font-averta font-bold text-2xl my-4"><?php echo $spotlightContentHeading; ?></h2>
                                        <p class="text-black dark:text-white font-averta text-sm font-medium leading-snug"><?php echo $spotlighContentDescription; ?></p>

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
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<?php $relatedTestimonials = get_field('wwww_relationship_field_for_testimonial'); 
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
                            <a class="absolute -bottom-20" href="<?php echo get_page_link($post->ID) ?>">
                                <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-white px-6 py-2 font-medium text-black text-lg"><span>Read Customer Story</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
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
<section id="Blog" class="pt-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <?php get_template_part('partials/blog', 'carousel'); ?>
    </div>
</section>

<?php get_footer(); ?>