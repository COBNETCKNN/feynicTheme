<footer>
    <section id="topFooter" class="bg-black py-10">
    <h2 class="text-1xl lg:text-3xl font-averta font-bold text-white text-center mb-8 lg:mb-5">Join Our Mailing List</h2>
    <div class="flex justify-center mx-10 lg:mx-0 ">
        <form action="#" class="popup-form">
            <input type="email" class="popup-form-input block w-[600px] text-neutral-800 bg-black font-averta border-b-2 border-neutral-800 mb-5" placeholder="Email" required>
            <div class="w-full flex justify-center">
                <a href="#">
                    <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-6 py-2 font-medium text-white text-sm"><span>Submit</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                </a>
            </div>
        </form>
    </div>
    </section>
    <section id="bottomFooter" class="bg-blue py-10 px-14 lg:px-0 relative">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-5 gap-4">
                <!-- Quick Links -->
                <div class="order-2 lg:order-1">
                    <h3 class="text-white font-averta font-bold text-1xlg text-start pb-3">Quick Links</h3>
                    <ul class="text-start">
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo home_url(); ?>">Home</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="#whatWeDo">Services</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/about')?>">About Feynic Technology</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/blog')?>">Insighs</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/contact-us')?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- What We Do -->
                <div class="hidden lg:block">
                <h3 class="text-white font-averta font-bold text-1xlg text-start pb-3">What We Do</h3>
                    <ul class="text-start">
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/services/emerging-technology')?>">Emerging Technology</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/services/community-ecosystems')?>">Community & Ecosystems</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/services/commerical-modelling')?>">Commerical Modelling</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/services/strategy-transformation')?>">Strategy & Transformation</a>
                        </li>
                    </ul>
                </div>
                <!-- Who We Help -->
                <div class="hidden lg:block">
                <h3 class="text-white font-averta font-bold text-1xlg text-start pb-3">Who We Help</h3>
                    <ul class="text-start">
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/partners/founders')?>">Founders</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/partners/investors')?>">Investors</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-xs" href="<?php echo site_url('/partners/institutions')?>">Institutions</a>
                        </li>
                    </ul>
                </div>
                <?php 
                    
                $args = array( 
                    'post_type' => 'page',
                    'page_id' => 32
                );
                
                $footerQuery = new WP_Query($args);
                if ($footerQuery->have_posts()) {
                    // Loop through the posts (in this case, just one)
                    while ($footerQuery->have_posts()) {
                        $footerQuery->the_post();
                ?>

                <!-- Accrediations -->
                <div class="footer_accrediations hidden lg:block">
                    <h3 class="text-white font-averta font-bold text-1xlg text-start pb-5">Our Accrediations</h3>
                    <?php if( have_rows('footer_accreditations') ): ?>
                        <?php while( have_rows('footer_accreditations') ): the_row(); 

                            $accrediationImages = get_sub_field('footer_accreditations_accreditations');
                            $accrediationsSize = 'footer-accrediations'; // (thumbnail, medium, large, full or custom size)
                            if( $accrediationImages ): ?>
                                <?php foreach( $accrediationImages as $accrediationImage ): ?>
                                    <div class="accrediations_wrapper pb-3" style="display: none;">
                                        <?php echo wp_get_attachment_image( $accrediationImage, $accrediationsSize ); ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="accrediations_loadMore ml-16 mt-5">
                        <a href="" class="accrediations_loadMore__button bg-white py-0.5 px-2 text-xs font-averta text-black font-medium rounded-lg flex items-center w-fit">
                            <span class="mr-1">View more </span>
                            <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5384 4.10493C1.81177 3.83156 2.25498 3.83156 2.52835 4.10493L4.83337 6.40995L7.1384 4.10493C7.41177 3.83156 7.85498 3.83156 8.12835 4.10493C8.40172 4.37829 8.40172 4.82151 8.12835 5.09488L5.32835 7.89488C5.05498 8.16824 4.61177 8.16824 4.3384 7.89488L1.5384 5.09488C1.26503 4.82151 1.26503 4.37829 1.5384 4.10493Z" fill="#0086D6"/>
                            </svg>
                        </a>
                    </div>
                    <div class="accrediations_close ml-16 mt-5" style="display: none;">
                        <a href="" class="accrediations_close__button bg-white py-0.5 px-2 text-xs font-averta text-black font-medium rounded-lg flex items-center w-fit">
                            <span class="mr-1">View less</span>
                            <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5384 4.10493C1.81177 3.83156 2.25498 3.83156 2.52835 4.10493L4.83337 6.40995L7.1384 4.10493C7.41177 3.83156 7.85498 3.83156 8.12835 4.10493C8.40172 4.37829 8.40172 4.82151 8.12835 5.09488L5.32835 7.89488C5.05498 8.16824 4.61177 8.16824 4.3384 7.89488L1.5384 5.09488C1.26503 4.82151 1.26503 4.37829 1.5384 4.10493Z" fill="#0086D6"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Social Media -->
                <div class="">
                <?php if( have_rows('footer_logo_social_media_links') ): ?>
                    <?php while( have_rows('footer_logo_social_media_links') ): the_row(); 
                    
                        // Footer Logo
                        $footerLogo = get_sub_field('footer_footer_logo');
                        $footerLogoSize = 'full'; // (thumbnail, medium, large, full or custom footerLogoSize) ?>
                            <div class="pb-5 border-b border-white">
                                <?php
                                    echo wp_get_attachment_image( $footerLogo, $footerLogoSize );
                                ?>
                            </div>

                        <!-- Social Media Icons Repeater -->
                        <div class="flex justify-start my-7">
                            <?php if( have_rows('footer_social_media_icons_links') ): ?>
                                <?php while( have_rows('footer_social_media_icons_links') ): the_row(); 
                                
                                $footerSocialMediaIcon = get_sub_field('footer_social_media_icon');
                                $footerSocialMediaIconSize = 'social-media';
                                $footerSocialMediaLink = get_sub_field('footer_social_media_link');
                                ?>

                                <a class="mr-3" href="<?php echo $footerSocialMediaLink; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( $footerSocialMediaIcon, $footerSocialMediaIconSize ); ?>
                                </a>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <!-- Privacy and Cookies pages -->
                        <div class="">
                            <a class="block text-white font-averta text-xs font-light mb-2" href="<?php echo site_url('/privacy-policy')?>">Privacy Policy</a>
                            <a class="block text-white font-averta text-xs font-light mb-2" href="<?php echo site_url('/cookie-policy')?>">Cookie Policy</a>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?> 
                </div>



                <?php
                    }
                    } else {
                        // No posts found
                        echo '<p>Page not found.</p>';
                    }
                    wp_reset_postdata();
                ?>
            </div>
            <div class="flex justify-between mt-14 pt-3 border-t border-white text-white font-averta font-light text-xs">
                <span>Copyright Feynic Technology <?php echo date("Y"); ?></span>
                <a href="https://www.sensostudio.co/" target="_blank">
                    <img class="w-auto h-[32px]" src="<?php echo get_template_directory_uri() ?>/assets/icons/Senso-Footer-Tag-Light.svg">
                </a>

                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>