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

<header class="bg-white dark:bg-zinc-800 py-3">
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
                        <li class="header_listItem"><a class="text-black dark:text-white transition ease-in-out delay-150 hover:text-blue text-sm" href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="whatwedo_nav__link"><a class="flex items-center text-black dark:text-white transition ease-in-out delay-150 hover:text-blue text-sm" href="#">What We Do <div class="nav_arrow p-2 inline-block" style="font-size:1.3em;">&#8250;</div></a>
                            <div class="whatwedoNav animate__animated">
                                <div class="whatwedoNav_spacer py-3 bg-transparent"></div>
                                <div class="bg-blue dark:bg-zinc-700 p-14 rounded-2xl animate__animated animate__bounce">
                                    <div class="whatwedoNav_content__wrapper grid grid-cols-3 gap-4 animte_animated">
                                        <!-- What we Do -->
                                        <div class="">
                                            <!-- Services links -->
                                            <h3 class="text-white dark:text-white font-averta font-bold text-2xlg text-start pb-3">What We Do</h3>
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
                                                        <a class="text-white dark:text-white font-averta font-light text-lg" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </li>

                                                <?php 
                                                    endwhile;
                                                else :
                                                    // No pages found
                                                    echo 'No pages found';
                                                endif; 
                                                wp_reset_postdata();
                                                ?>
                                            </ul>
                                            <div class="flex justify-start pt-7">
                                                </a><a href="<?php echo site_url('/what-we-do')?>">
                                                    <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-white dark:bg-black px-6 py-2 font-medium text-black dark:text-white text-lg"><span>View all</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Who We Work With -->
                                        <div class="">
                                            <!-- Services links -->
                                            <h3 class="text-white dark:text-white font-averta font-bold text-2xlg text-start pb-3">Who We Work With</h3>
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
                                                        <a class="text-white dark:text-white font-averta font-light text-lg" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </li>

                                                <?php 
                                                    endwhile;
                                                else :
                                                    // No pages found
                                                    echo 'No pages found';
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
                            </div>
                        </li>
                        <li class="insights_nav__link">
                            <a class="flex items-center text-black dark:text-white transition ease-in-out delay-150 hover:text-blue text-sm" href="#">Insights<div class="nav_arrow p-2 inline-block" style="font-size:1.3em;">&#8250;</div></a>
                            <div class="insightsNav animate__animated">
                                <div class="insightNav_spacer py-3 bg-transparent"></div>
                                <div class="bg-blue dark:bg-zinc-700 p-14 rounded-2xl ">
                                    <div class="insightNav_content__wrapper grid grid-cols-2 gap-4 max-w-[800px] animate__animated">
                                        <!-- Insights -->
                                        <div class="">
                                            <!-- Services links -->
                                            <h3 class="text-white dark:text-white font-averta font-bold text-2xlg text-start pb-3">Insights</h3>
                                            <ul class="text-start">
                                                <li class="py-1">
                                                    <a class="text-white dark:text-white font-averta font-light text-lg" href="<?php echo site_url('/blog')?>">Blogs</a>
                                                </li>
                                                <li class="py-1">
                                                    <a class="text-white dark:text-white font-averta font-light text-lg" href="<?php echo site_url('/blog')?>">Events</a>
                                                </li>
                                                <li class="py-1">
                                                    <a class="text-white dark:text-white font-averta font-light text-lg" href="#">Case Studies</a>
                                                </li>
                                                <li class="py-1">
                                                    <a class="text-white dark:text-white font-averta font-light text-lg" href="<?php echo get_post_type_archive_link('testimonial')?>">Testimonials</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Recent Blog Posts -->
                                        <div class="">
                                        <h3 class="text-white dark:text-white font-averta font-bold text-2xlg text-start pb-3">Recent Articles</h3>
                                        <?php
                                            $blogArgs = array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 2,
                                                'order' => 'DESC',
                                            );

                                            $blogQuery = new WP_Query( $blogArgs );

                                            if ( $blogQuery->have_posts() ) :
                                                while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); 
                                                $navBlogPostFeaturedImage = get_the_post_thumbnail_url();
                                                ?>
                                                
                                                <div class="blogPost_wrapper mb-5 grid grid-cols-3 gap-10 relative">
                                                    <div class="col-span-1">
                                                        <div class="navBlog_image__wrapper h-[100px] w-[130px]">
                                                            <?php the_post_thumbnail('nav-blog'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class="text-start ml-5 text-white dark:text-white font-averta">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php the_title(); ?>
                                                            </a>
                                                        </div>
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

                            </div>
                        </li>
                        <li class="header_listItem"><a class="text-black dark:text-white transition ease-in-out delay-150 hover:text-blue text-sm" href="<?php echo site_url('/about')?>">About</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Get in touch button -->
            <div class="flex items-center">
                <div class="hidden dark:flex mr-5">
                    <img class="sun cursor-pointer h-[35px] w-[35px]" src="<?php echo get_template_directory_uri() ?>/assets/icons/sun-2-svgrepo-com.svg" alt="light_mod">
                    </div>
                    <div class="flex dark:hidden">
                    <img class="moon cursor-pointer h-[35px] w-[35px]" src="<?php echo get_template_directory_uri() ?>/assets/icons/moon-svgrepo-com.svg" alt="dark_mod">
                </div>
                </a><a href="<?php echo site_url('/contact-us')?>">
                    <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-xl bg-blue px-6 py-2 font-medium text-white text-sm"><span>Get In Touch</span><div class="ml-1 transition group-hover:translate-x-1"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                </a>
            </div>
        </div>
    </div>
    <script>
        // Dark mode
        // Don't forget to put this in separate file and load it in the header
        const sunIcon = document.querySelector(".sun");
        const moonIcon = document.querySelector(".moon");

        const userTheme = localStorage.getItem("theme");
        const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

        const iconToggle = () => {
            moonIcon.classList.toggle("display-none");
            sunIcon.classList.toggle("display-none");
        };
        const themeCheck = () => {
            if (userTheme === "dark" || (!userTheme && systemTheme)) {
                document.documentElement.classList.add("dark");
                moonIcon.classList.add("display-none");
                return;
            }
            sunIcon.classList.add("display-none");
        };

        const themeSwitch = () => {
            if (document.documentElement.classList.contains("dark")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("theme", "light");
                iconToggle();
                return;
            }
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme", "dark");
            iconToggle();
        };

        sunIcon.addEventListener("click", () => {
            themeSwitch();
        });
        moonIcon.addEventListener("click", () => {
            themeSwitch();
        });

        themeCheck();
    </script>
</header>