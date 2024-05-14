<?php get_header(); 

$singleProject_url = get_the_post_thumbnail_url(get_the_ID(), 'singleService-hero'); 
?>

<!-- Hero Section -->
<section id="singleProject" class="h-[550px] w-full relative">
    <div class="w-full h-full singlePartnerHero_wrapper py-14" style="background-image: url('<?php echo esc_url($singleProject_url); ?>');">
        <div class="container mx-auto h-full w-full">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs_wrapper relative z-10">
            <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-white font-light mb-10">
                <ol>
                    <li>
                    <a href="<?php echo site_url(); ?>">Home</a>
                    </li>
                    <span aria-hidden="true" class="breadcrumb-separator-white">&gt;</span>
                    <li>
                    <a href="#">Insights</a>
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
            <div class="relative z-10 flex justify-start items-center h-full w-full">
                <?php 
                $singleInisghtHeroHeading = get_field('single_insight_hero_heading');
                ?>
                <h1 class="font-averta text-white font-bold text-6xl leading-none mb-4 w-[50%]"><?php echo $singleInisghtHeroHeading; ?></h1>
            </div>
        </div>
    </div>
</section>

<!-- Company Credentials -->
<section id="companyCredentials" class="py-24 bg-white">
    <div class="container mx-auto">
    <?php if( have_rows('single_insight_company_credentials') ): ?>
        <?php while( have_rows('single_insight_company_credentials') ): the_row(); ?>
        <div class="grid grid-cols-2 gap-4 bg-brown py-24 px-16 rounded-xl">
            <!-- Content -->
            <div class="my-auto">
            <?php if( have_rows('single_insight_company_credentials_content') ): ?>
                <?php while( have_rows('single_insight_company_credentials_content') ): the_row(); 
                
                $companyCredentialsHeading = get_sub_field('single_insight_company_credentials_content_company_name');
                $companyCredentialsDescription = get_sub_field('single_insight_company_credentials_content_company_description');
                ?>

                <h2 class="font-averta text-black font-bold text-5xl"><?php echo $companyCredentialsHeading; ?></h2>
                <p class="text-black font-averta font-medium text-base leading-tight"><?php echo $companyCredentialsDescription; ?></p>
                <div class="flex justify-start my-10">
                    <?php if( have_rows('single_insight_company_credentials_content_tags') ): ?>
                        <?php while( have_rows('single_insight_company_credentials_content_tags') ): the_row(); 
                        
                        $companyCredentialsTag = get_sub_field('single_insight_company_credentials_content_repeater_tag');
                        ?>

                            <span class="font-averta py-1 px-3 bg-black rounded text-white mr-3"><?php echo $companyCredentialsTag; ?></span>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- Social Media Share -->
                <div class="">
                    <?php     
                        $url = urlencode(get_permalink());
                        $title = get_the_title();
                        $siteName = get_bloginfo('name');

                        $facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u='.$url;
                        $twitterUrl = 'http://twitter.com/intent/tweet?text=Currently reading &lt;'.$title.'&gt;&amp;url=&lt;'.$url.'?&gt;';
                        $linkedInUrl = 'http://www.linkedin.com/shareArticle?mini=true&amp;url=&lt;'.$url.'&gt;&amp;title=&lt;'.$title.'&gt;&amp;summary=&amp;source=&lt;'.$siteName.'?&gt;';
                    ?>

                    <div class="share-social block">
                    <div class="line hidden md:block"></div>
                    <div class="font-averta font-bold text-lg text-black">Share:</div>
                    <div class="share-social_wrapper flex justify-start mt-2">
                        <!-- Linkedin sharing icon -->
                        <a href="<?php echo $linkedInUrl; ?>" target="_blank" class="sharing_socialMedia sharing_sociaMedia__linkedin mr-3"></a>
                        <!-- Twitter sharing icon -->
                        <a href="<?php echo $twitterUrl; ?>" target="_blank" class="sharing_socialMedia sharing_sociaMedia__twitter"></a>
                    </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <!-- Image -->
            <div class="companyCredentialsImage_wrapper flex justify-end my-auto">
            <?php 
                $companyCredentialsImage = get_sub_field('single_insight_company_credentials_image');
                $companyCredentialsImageSize = 'approach-thumbnail'; // (thumbnail, medium, large, full or custom size)
                    if( $companyCredentialsImage ) {
                        echo wp_get_attachment_image( $companyCredentialsImage, $companyCredentialsImageSize );
                    }
            ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>

<section id="singleInisghtContent" class="py-14 bg-white">
    <div class="container mx-auto">
    <?php
        if( have_rows('single_insight_content_blocks') ):
            while ( have_rows('single_insight_content_blocks') ) : the_row(); ?>

                <div class="py-24">
                    <?php
                        include 'blocks/singleInsight/' . get_row_layout() . '.php';
                    ?>
                </div>

            <?php
            endwhile;
        endif; 
    ?>
    </div>
</section>

<!-- Testimonial -->
<section id="singleProjectTestimonial" class="py-14 bg-white">
    <div class="container mx-auto">
        <div class="singleProjectTestimonial_wrapper bg-blue py-32 px-24 rounded-3xl">
        <?php if( have_rows('single_insight_testimonial') ): ?>
            <?php while( have_rows('single_insight_testimonial') ): the_row(); 
            
            $singleProjectTestimonialMessage = get_sub_field('single_insight_testimonial_message');
            ?>

            <div class="flex justify-center">
                <h2 class="font-averta text-white text-4xl font-bold text-center w-[80%] leading-tight"><?php echo $singleProjectTestimonialMessage; ?></h2>
            </div>
            <div class="singleProjectTestimonial_credentials__wrapper">
            <?php if( have_rows('single_insight_testimonial_credentials') ): ?>
                <?php while( have_rows('single_insight_testimonial_credentials') ): the_row(); ?>
                <div class="flex justify-center items-center mt-14">
                    <!-- Company Logo -->
                    <div class="singleProject_companyLogo mr-6">
                        <?php
                        $singleProjectTestimonialCompanyLogo = get_sub_field('single_insight_testimonial_credentials_logo');
                        $singleProjectTestimonialCompanyLogoSize = 'project-testimonial'; // (thumbnail, medium, large, full or custom size)
                            if( $singleProjectTestimonialCompanyLogo ) {
                                echo wp_get_attachment_image( $singleProjectTestimonialCompanyLogo, $singleProjectTestimonialCompanyLogoSize );
                            }
                        ?>
                    </div>
                    <!-- Credentials -->
                    <div class="">
                    <?php if( have_rows('single_insight_testimonial_credentials_credentials_group') ): ?>
                        <?php while( have_rows('single_insight_testimonial_credentials_credentials_group') ): the_row(); 
                        
                        $companyTestimonialName = get_sub_field('single_insight_testimonial_credentials_name');
                        $companyTestimonialPosition = get_sub_field('single_insight_testimonial_credentials_position');
                        ?>

                        <h4 class="font-averta text-white text-2.5xl font-bold mb-1"><?php echo $companyTestimonialName; ?></h4>
                        <h5 class="font-averta text-white text-2xl font-light"><?php echo $companyTestimonialPosition; ?></h5>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>