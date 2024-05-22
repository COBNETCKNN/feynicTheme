<footer>
    <section id="topFooter" class="bg-black py-10">
    <h2 class="text-3xl font-averta font-bold text-white text-center mb-5">Join Our Mailing List</h2>
    <div class="flex justify-center">
        <form action="#" class="popup-form">
            <input type="email" class="popup-form-input block w-[600px] text-neutral-800 bg-black font-averta border-b-2 border-neutral-800 mb-3" placeholder="Email" required>
            <div class="w-full flex justify-center">
                <button class="popup-form-submit block bg-blue py-2 px-5 rounded-lg text-white font-averta font-medium text-base mt-5 text-center flex items-center">
                    <span>Submit</span>
                    <svg class="mt-1 ml-2" width="20" height="12" viewBox="0 0 20 12" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_509_229)">
                        <path d="M19.3371 5.60733C19.3371 5.60733 19.3263 5.59633 19.3219 5.59193L14.0171 0.218005C13.8065 -0.0394679 13.4309 -0.0724773 13.1768 0.140983C12.9227 0.354444 12.8902 0.735152 13.1008 0.992625C13.1247 1.02123 13.1486 1.04544 13.1768 1.06965L17.4632 5.41808H1.09714C0.767086 5.41808 0.5 5.68876 0.5 6.02325C0.5 6.35775 0.767086 6.62842 1.09714 6.62842H17.4632L13.1703 10.9725C12.9466 11.2101 12.9466 11.5864 13.1703 11.8241C13.4026 12.0596 13.7761 12.0596 14.0085 11.8241L19.3176 6.44137C19.5499 6.2147 19.5565 5.8406 19.3328 5.60513L19.3371 5.60733Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_509_229">
                        <rect width="19" height="12" fill="white" transform="translate(0.5)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    </section>
    <section id="bottomFooter" class="bg-blue py-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-5 gap-4">
                <!-- Quick Links -->
                <div class="">
                    <h3 class="text-white font-averta font-bold text-2xlg text-start pb-3">Quick Links</h3>
                    <ul class="text-start">
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo home_url(); ?>">Home</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="#whatWeDo">Services</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/about')?>">About Feynic Technology</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/blog')?>">Insighs</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/contact-us')?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- What We Do -->
                <div class="">
                <h3 class="text-white font-averta font-bold text-2xlg text-start pb-3">What We Do</h3>
                    <ul class="text-start">
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/services/emerging-technology')?>">Emerging Technology</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/services/community-ecosystems')?>">Community & Ecosystems</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/services/commerical-modelling')?>">Commerical Modelling</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/services/strategy-transformation')?>">Strategy & Transformation</a>
                        </li>
                    </ul>
                </div>
                <!-- Who We Help -->
                <div class="">
                <h3 class="text-white font-averta font-bold text-2xlg text-start pb-3">Who We Help</h3>
                    <ul class="text-start">
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/partners/founders')?>">Founders</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/partners/investors')?>">Investors</a>
                        </li>
                        <li class="py-1">
                            <a class="text-white font-averta font-light text-lg" href="<?php echo site_url('/partners/institutions')?>">Institutions</a>
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
                <div class="footer_accrediations">
                    <h3 class="text-white font-averta font-bold text-2xl text-start pb-5">Accrediations</h3>
                    <?php if( have_rows('footer_accreditations') ): ?>
                        <?php while( have_rows('footer_accreditations') ): the_row(); 

                            $accrediationImages = get_sub_field('footer_accreditations_accreditations');
                            $accrediationsSize = 'footer-accrediations'; // (thumbnail, medium, large, full or custom size)
                            if( $accrediationImages ): ?>
                                <?php foreach( $accrediationImages as $accrediationImage ): ?>

                                        <?php echo wp_get_attachment_image( $accrediationImage, $accrediationsSize ); ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
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
                            <a class="block text-white font-averta text-base font-light mb-2" href="<?php echo site_url('/privacy-policy')?>">Privacy Policy</a>
                            <a class="block text-white font-averta text-base font-light mb-2" href="<?php echo site_url('/cookie-policy')?>">Cookie Policy</a>
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
            <div class="flex justify-between mt-32 pt-3 border-t border-white text-white font-averta font-light">
                <span>Copyright Feynic Technology <?php echo date("Y"); ?></span>
                <a class="footerCredential_link" href="https://www.sensostudio.co/">
                <span>Created By Senso Studio</span>
                </a>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>