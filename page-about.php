<?php get_header() ?>

<!-- Hero Section -->
<section id="aboutHero" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs_wrapper relative z-10">
        <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-black font-light mb-10">
            <ol>
                <li>
                <a class="text-black dark:text-white" href="<?php echo site_url(); ?>">Home</a>
                </li>
                <span class="text-black dark:text-white" aria-hidden="true" class="breadcrumb-separator">&gt;</span>
                <li>
                <a class="text-blue font-bold" href="<?php echo site_url('/about')?>">About Feynic</a>
                </li>
                </li>
            </ol>
        </nav>
        </div>
        <?php if( have_rows('about_hero_content') ): ?>
            <?php while( have_rows('about_hero_content') ): the_row();    

            $aboutHeroHeading = get_sub_field('about_hero_heading');
            $aboutHeroSubtext = get_sub_field('about_hero_subtext');
            ?>
            <!-- Hero Content -->
            <div class="mx-10">
                <div class="aboutHero_content pb-14 pt-10">
                    <h1 class="font-averta text-black dark:text-white font-bold text-5xl text-center my-6"><?php echo $aboutHeroHeading; ?></h1>
                    <div class="flex justify-center">
                        <h4 class="text-black dark:text-white font-averta text-center font-medium text-xl w-[80%] leading-tight"><?php echo $aboutHeroSubtext; ?></h4>
                    </div>
                </div>
                <!-- Spotlight Section -->
                <div class="grid grid-cols-2 gap-4 py-14">
                    <?php if( have_rows('about_spotlight_section') ): ?>
                        <?php while( have_rows('about_spotlight_section') ): the_row(); ?>
                        <!-- Content -->
                        <div class="my-auto">
                        <?php if( have_rows('about_spotlight_section_content') ): ?>
                            <?php while( have_rows('about_spotlight_section_content') ): the_row(); 
                            
                            $aboutSpotlightHeading = get_sub_field('about_spotlight_section_heading');
                            $aboutSpotlightSubtext = get_sub_field('about_spotlight_section_subtext');
                            ?>

                                <h2 class="text-black dark:text-white font-averta font-bold text-2xl my-4"><?php echo $aboutSpotlightHeading; ?></h2>
                                <p class="text-black dark:text-white font-averta text-sm font-medium leading-snug"><?php echo $aboutSpotlightSubtext; ?></p>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        <!-- Image -->
                        <div class="spotlightContent_image flex justify-end">
                            <?php
                            $aboutSpotlightImage = get_sub_field('about_spotlight_section_image');
                            $aboutSpotlightImageSize = 'approach-thumbnail';

                                if( $aboutSpotlightImage ) {
                                    echo wp_get_attachment_image( $aboutSpotlightImage, $aboutSpotlightImageSize );
                                }
                            ?>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Featured Video -->
        <div class="mx-10 py-14">
            <?php 
            $aboutVimeoVideo = get_field('featured_vimeo_video');
            ?>
            <!-- Vimeo Video -->
            <div class="testmionialVimeo_wrapper h-[400px] relative">
                <div class='embed-container'>
                    <iframe src='https://player.vimeo.com/video/<?php echo $aboutVimeoVideo; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div>
        </div>
        <!-- Suppost Services -->
        <div class="mx-10 py-14">
            <?php if( have_rows('about_innovation_support_services') ): ?>
                <?php while( have_rows('about_innovation_support_services') ): the_row(); 
                
                $supportServicesHeading = get_sub_field('Innovation Support Services_heading');
                $supportServicesSubtext = get_sub_field('Innovation Support Services_subtext');
                ?>

                <h2 class="font-averta text-black dark:text-white font-bold text-3xl text-center my-6"><?php echo $supportServicesHeading; ?></h2>
                <div class="flex justify-center">
                    <h4 class="text-black dark:text-white font-averta text-center font-medium text-xl w-[80%] leading-tight"><?php echo $supportServicesSubtext; ?></h4>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Team -->
<section id="Team" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <h2 class="text-black dark:text-white font-averta text-start font-bold text-1xl mb-10">The Team</h2>
            <?php if( have_rows('about_team') ): ?>
                <?php while( have_rows('about_team') ): the_row();  ?>
                <div class="grid grid-cols-5 gap-4">
                    <!-- Image -->
                    <div class="spotlightContent_image flex justify-start my-auto col-span-2">
                        <?php 
                        $theTeamImage = get_sub_field('about_team_image');
                        $theTeamImageSize = 'about-team';

                        if( $theTeamImage ) {
                            echo wp_get_attachment_image( $theTeamImage, $theTeamImageSize );
                        }
                        ?>
                    </div>
                    <!-- Content -->
                    <div class="col-span-3 my-auto">
                    <?php if( have_rows('about_team_about') ): ?>
                        <?php while( have_rows('about_team_about') ): the_row(); 
                        
                        $theTeamName = get_sub_field('about_team_about_name');
                        $theTeamPosition = get_sub_field('about_team_about_position');
                        $theTeamBiography = get_sub_field('about_team_about_biography');
                        ?>

                        <h4 class="font-averta text-black dark:text-white text-2.5xl font-bold"><?php echo $theTeamName; ?></h4>
                        <h5 class="font-averta text-blue text-xl font-bold"><?php echo $theTeamPosition; ?></h5>
                        <div class="biography_wrapper my-5 font-averta text-black dark:text-white text-base">
                            <?php echo $theTeamBiography; ?>
                        </div>
                        <!-- Contact -->
                        <div class="flex">
                            <?php if( have_rows('about_team_about_contact') ): ?>
                                <?php while( have_rows('about_team_about_contact') ): the_row(); 
                                
                                $theTeamContactIcon = get_sub_field('about_team_about_contact_social_media_icon');
                                $theTeamContactIconSize = 'contact-icon';
                                $theTeamContactLink = get_sub_field('about_team_about_contact_link');
                                ?>

                                <a href="<?php echo $theTeamContactLink; ?>" target="_blank" class="mr-3">
                                    <?php 
                                    if( $theTeamContactIcon ) {
                                        echo wp_get_attachment_image( $theTeamContactIcon, $theTeamContactIconSize );
                                    }
                                    ?>
                                </a>

                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php 
                            $theTeamEmail = get_sub_field('about_team_about_contact_email');

                            if($theTeamEmail) { ?>
                            
                            <a href="mailto:<?php echo $theTeamEmail; ?>">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="5" fill="#0086D6"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.1651 9C24.7644 9 25.2966 9.26096 25.6314 9.66459L15.9063 17.0735L6.26785 9.79913C6.59012 9.31989 7.17137 9 7.83486 9H24.1651ZM6 21.3333V11.1138L12.9159 16.3333L6.01426 21.5421C6.00485 21.4737 6 21.404 6 21.3333ZM6.6325 22.5923C6.95452 22.8463 7.37493 23 7.83486 23H24.1651C24.5605 23 24.9266 22.8864 25.2261 22.6933L17.8772 17.0947L16.5557 18.1015C16.1819 18.3862 15.6374 18.3873 15.2622 18.1042L13.9208 17.0917L6.6325 22.5923ZM18.8766 16.3333L25.9499 21.722C25.9826 21.5973 26 21.4671 26 21.3333V10.9065L18.8766 16.3333Z" fill="white"/>
                            </svg>
                            </a>

                            <?php
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
</section>

<!-- Accrediations -->
<section id="Accreditations" class="py-36 dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <h2 class="text-black dark:text-white font-averta text-center font-bold text-1xl mb-10">Our Accreditations</h2>
            <?php 
            $aboutAccreditationImage = get_field('about_accreditations');
            $aboutAccreditationImagesize = 'about-accreditation'; // (thumbnail, medium, large, full or custom size)
            if( $aboutAccreditationImage ): ?>
                <div class="flex justify-center">
                    <?php foreach( $aboutAccreditationImage as $accrediationImage ): ?>
                        <?php echo wp_get_attachment_image( $accrediationImage, $aboutAccreditationImagesize ); ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
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