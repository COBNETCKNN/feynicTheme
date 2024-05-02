<?php get_header() ?>

<!-- Hero Section -->
<section id="hero" class="py-32">
    <div class="container mx-auto">
        <div class="mx-14">
            <div class="grid grid-cols-5 gap-4">
                <!-- Content Area -->
                <div class="col-span-2">
                <?php if( have_rows('homepage_hero_section') ): ?>
                    <?php while( have_rows('homepage_hero_section') ): the_row(); 

                        // Get sub field values.
                        $heroHeading = get_sub_field('homepge_hero_title');
                        $heroSubText = get_sub_field('homepage_hero_subtext');

                        ?>

                        <h1 class="text-black font-averta text-6xl font-bold w-[50%] leading-tight mb-7"><?php echo $heroHeading; ?></h1>
                        <p class="font-averta text-lg font-medium leading-snug w-[80%] mb-7"><?php echo $heroSubText; ?></p>
                        <div class="heroButtons flex justify-between w-[70%]">
                            <a class="bg-blue py-2 px-7 rounded-xl text-white flex items-center text-lg font-semibold" type="button" href="<?php echo get_post_type_archive_link('service')?>">
                            <span>What We Do</span>
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
                            <a class="bg-black py-2 px-7 rounded-xl text-white flex items-center text-lg font-semibold" type="button" href="<?php echo get_post_type_archive_link('project')?>">
                            <span>Our Work</span>
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
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <!-- Who We Work With -->
                <div class="col-span-3 my-auto">
                    <div class="grid grid-cols-3 gap-4">
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
                            
                            $partnersThumbnail = get_field('who_we_work_with_thumbnail');
                            $partnersThumbnailSize = 'whoweworkwith-thumbnail'; ?>

                            <div class="hero_partners__thumbnails">
                                <a href="<?php echo the_permalink(); ?>">
                                    <?php 
                                    if( $partnersThumbnail ) {
                                        echo wp_get_attachment_image( $partnersThumbnail, $partnersThumbnailSize );
                                    }
                                    ?>
                                </a>
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

<section id="partners" class="py-16 bg-blue">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="owl-carousel owl-theme">
                <?php if( have_rows('homepage_partners_carousel') ): ?>
                    <?php while( have_rows('homepage_partners_carousel') ): the_row(); 

                        // Get sub field values.
                        $partnersGallery = get_sub_field('homepage_partners_gallery');
                        $partnersSize = 'full';?>


                            <?php
                            if( $partnersGallery ): ?>
                                <?php foreach( $partnersGallery as $partnersImage ): ?>
                                    <div class="item item_partners__carousel">
                                        <?php echo wp_get_attachment_image( $partnersImage, $partnersSize ); ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Work With Feynic Section -->
<section id="workWithFeynic" class="py-20 bg-white">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="grid grid-cols-2 gap-4">
            <?php if( have_rows('hompage_work_with_feynic') ): ?>
                    <?php while( have_rows('hompage_work_with_feynic') ): the_row(); ?>
                        <!-- Content Area -->
                        <div class="my-auto">
                        <?php if( have_rows('work_with_feynic_content_area') ): ?>
                            <?php while( have_rows('work_with_feynic_content_area') ): the_row(); 
                            
                            $workWithUsHeading = get_sub_field('work_with_feynic_heading');
                            $workWithUsSubtext = get_sub_field('work_with_feynic_subtext');
                            ?>

                            <h2 class="font-averta text-5xl text-black font-bold mb-5"><?php echo $workWithUsHeading; ?></h2>
                            <div class="font-averta text-lg font-light leading-tight w-[80%] mb-7"><?php echo $workWithUsSubtext; ?></div>
                            <a class="bg-blue py-2 px-7 rounded-xl text-white flex items-center w-fit text-lg font-semibold" type="button" href="<?php echo site_url('/contact-us')?>">
                            <span>Work With Feynic</span>
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
                        <!-- Vision and Goals -->
                        <div class="">
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
                                        <span class="text-black text-3xl font-bold bg-white py-1 px-4"><?php echo $i; ?></span>
                                    </div>
                                    <div class="objectiveCard_content">
                                        <h3 class="text-white text-3xl font-averta font-bold mb-2"><?php echo $objectiveTitle; ?></h3>
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
<section id="whatWeDo" class="py-20 bg-white">
    <div class="container mx-auto">
        <div class="mx-10">
            <h3 class="text-black font-averta text-2xl font-bold">What we do</h3>
        </div>
    </div>
</section>

<?php get_footer() ?>