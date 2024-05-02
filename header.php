<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-cursor">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-white py-3">
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="logo_wrapper">
                <a href="<?php echo site_url(); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img class="logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                    ?>
                </a>
            </div>
            <!-- Nav Links -->
            <div class="">
                <nav class="navbar">
                    <ul class="font-averta font-normal"> 
                        <li class="header_listItem"><a class="text-black transition ease-in-out delay-150 hover:text-blue" href="#">Home</a></li>
                        <li><a class="flex items-center text-black transition ease-in-out delay-150 hover:text-blue" href="#">What We Do <div class="nav_arrow p-2 inline-block" style="font-size:1.3em;">&#8250;</div></a>
                            <div class="whatwedoNav bg-blue p-14 rounded-2xl">
                                <div class="grid grid-cols-3 gap-4">
                                    <!-- What we Do -->
                                    <div class="">
                                        <!-- Services links -->
                                        <h3 class="text-white font-averta font-bold text-2xl text-start pb-3">What We Do</h3>
                                        <ul class="text-start">
                                            <?php
                                                // The Query for Services
                                                $serviceArgs = array(
                                                    'post_type' => 'service',   // Specify the custom post type
                                                    'posts_per_page' => -1,      // Number of posts to display
                                                    'orderby' => 'date',        // Order by date
                                                    'order' => 'DESC',           // Sort in descending order
                                                );

                                                $projectQuery = new WP_Query($serviceArgs);

                                                if ($projectQuery->have_posts()) :
                                                    while ($projectQuery->have_posts()) : $projectQuery->the_post();
                                            ?>

                                                <li class="py-1">
                                                    <a class="text-white font-averta font-light text-xl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>

                                            <?php 
                                                endwhile;
                                            else :
                                                // No posts found
                                                echo 'No projects found';
                                            endif; 
                                            wp_reset_postdata();
                                            ?>
                                        </ul>
                                        <div class="flex justify-start pt-7">
                                            <a class="bg-white py-2 px-5 rounded-xl text-black font-averta font-bold flex items-center" href="" type="button">
                                            <span>View all </span>
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
                                    <!-- Who We Work With -->
                                    <div class="">
                                        <!-- Services links -->
                                        <h3 class="text-white font-averta font-bold text-2xl text-start pb-3">Who We Work With</h3>
                                        <ul class="text-start">
                                            <?php
                                                // The Query for Services
                                                $serviceArgs = array(
                                                    'post_type' => 'partners',   // Specify the custom post type
                                                    'posts_per_page' => -1,      // Number of posts to display
                                                    'orderby' => 'date',        // Order by date
                                                    'order' => 'DESC',           // Sort in descending order
                                                );

                                                $projectQuery = new WP_Query($serviceArgs);

                                                if ($projectQuery->have_posts()) :
                                                    while ($projectQuery->have_posts()) : $projectQuery->the_post();
                                            ?>

                                                <li class="py-1">
                                                    <a class="text-white font-averta font-light text-xl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>

                                            <?php 
                                                endwhile;
                                            else :
                                                // No posts found
                                                echo 'No projects found';
                                            endif; 
                                            wp_reset_postdata();
                                            ?>
                                        </ul>
                                    </div>
                                    <!-- Image -->
                                    <div class="">
                                        <img class="h-[250px] w-[330px] rounded-2xl" src="<?php echo get_template_directory_uri() ?>/assets/images/john-schnobrich-FlPc9_VocJ4-unsplash.jpg" alt="Description of the image">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="flex items-center text-black transition ease-in-out delay-150 hover:text-blue" href="#">Insights<div class="nav_arrow p-2 inline-block" style="font-size:1.3em;">&#8250;</div></a>
                            <div class="insightsNav bg-blue p-14 rounded-2xl">
                                <div class="grid grid-cols-2 gap-4 max-w-[700px]">
                                    <!-- Insights -->
                                    <div class="">
                                        <!-- Services links -->
                                        <h3 class="text-white font-averta font-bold text-2xl text-start pb-3">Insights</h3>
                                        <ul class="text-start">
                                            <li class="py-1">
                                                <a class="text-white font-averta font-light text-xl" href="<?php the_permalink(); ?>">Blogs</a>
                                            </li>
                                            <li class="py-1">
                                                <a class="text-white font-averta font-light text-xl" href="<?php the_permalink(); ?>">Events</a>
                                            </li>
                                            <li class="py-1">
                                                <a class="text-white font-averta font-light text-xl" href="<?php the_permalink(); ?>">Case Studies</a>
                                            </li>
                                            <li class="py-1">
                                                <a class="text-white font-averta font-light text-xl" href="<?php the_permalink(); ?>">Testimonials</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Recent Blog Posts -->
                                    <div class="">
                                    <h3 class="text-white font-averta font-bold text-2xl text-start pb-3">Recent Articles</h3>
                                    <?php
                                        $blogArgs = array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 2,
                                            'order' => 'DESC',
                                        );

                                        $blogQuery = new WP_Query( $blogArgs );

                                        if ( $blogQuery->have_posts() ) :
                                            while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); 
                                            
                                            ?>
                                            
                                            <div class="blogPost_wrapper mb-10 flex justify-start">
                                                <div class="navbar_blogpost__image my-auto">
                                                    <?php the_post_thumbnail('nav-blog'); ?>
                                                </div>
                                                <div class="text-start ml-5 text-white font-averta">
                                                    <?php the_title(); ?>
                                                </div>
                                            </div>

                                        <?php 
                                            endwhile;
                                            wp_reset_postdata(); // Reset post data to the main loop
                                        else :
                                            echo 'No posts found';
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="header_navItem" href="#">About</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Get in touch button -->
            <div class="">
                <a class="bg-blue py-3 px-5 rounded-2xl text-white text-lg font-semibold flex items-center" href="" type="button">
                    <span class="">Get In Touch</span>
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


</header>