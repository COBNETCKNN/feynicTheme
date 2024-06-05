<?php get_header();

$contactHero_url = get_the_post_thumbnail_url(get_the_ID(), 'singleService-hero'); 
$contactHeroDescription = get_field('contact_hero_description');
?>

<!-- Hero Section -->
<section id="singlePartnerHero" class="h-[450px] w-full relative bg-white dark:bg-zinc-800">
    <div class="w-full h-full singlePartnerHero_wrapper py-14" style="background-image: url('<?php echo esc_url($contactHero_url); ?>');">
        <div class="container mx-auto">
            <div class="mx-10">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Content -->
                    <div class="my-auto">
                        <!-- Breadcrumbs -->
                        <div class="breadcrumbs_wrapper relative z-10">
                            <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-white font-light mb-10">
                                <ol>
                                    <li>
                                    <a href="<?php echo site_url(); ?>">Home</a>
                                    </li>
                                    <span aria-hidden="true" class="breadcrumb-separator-white">&gt;</span>
                                    <li>
                                    <a class="text-white font-medium" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Content -->
                        <div class="relative z-10">
                            <h1 class="font-averta text-white font-bold text-6xl leading-none mb-4"><?php echo the_title(); ?></h1>
                            <h4 class="font-averta text-white font-light text-lg"><?php echo $contactHeroDescription ; ?></h4>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="relative">
                        <?php 
                        $theme_dir = get_template_directory_uri();
                        $image_path = '/assets/images/feynicContactUs.png';
                        $image_url = $theme_dir . $image_path;
                        ?>
                        <img class="w-[530px] h-[600px] absolute z-20 top-24 right-10" src="<?php echo esc_url( $image_url ); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="formInfo" class="py-24 bg-white bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="grid grid-cols-2 gap-24">
                <?php if( have_rows('contact_content') ): ?>
                    <?php while( have_rows('contact_content') ): the_row(); 
                    
                    $contactFormShortcode = get_sub_field('contact_form_shortcode');
                    ?>
                    <!-- Contact Form -->
                    <div class="contactPage_contact__form font-averta text-white bg-blue p-14 rounded-2xl">
                        <h4 class="font-averta text-1xl text-white font-bold text-center mb-5">Get in touch</h4>
                        <?php echo do_shortcode($contactFormShortcode); ?>
                    </div>
                    <!-- Emails -->
                    <div class="bg-brown rounded-2xl px-5 py-10 h-fit my-auto text-center">
                        <h5 class="text-black font-averta font-bold text-xl mb-5">Alternatively, reach out to us</h5>
                        <h5 class="text-black font-averta font-bold text-xl mb-5">Email:</h5>
                        <?php if( have_rows('contact_email') ): ?>
                            <?php while( have_rows('contact_email') ): the_row();  
                            
                            $contactPageEmail = get_sub_field('contact_email');
                            ?>

                            <a class="font-averta font-light text-black text-xl block hover:underline" href="mailto:<?php echo $contactPageEmail; ?>"><?php echo $contactPageEmail; ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>