<?php get_header() ?>

<!-- Hero Section -->
<section id="singlePostHero" class="py-14 bg-white">
    <div class="container mx-auto">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs_wrapper relative z-10">
        <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-black font-light mb-10">
            <ol>
                <li>
                <a href="<?php echo site_url(); ?>">Home</a>
                </li>
                <span aria-hidden="true" class="breadcrumb-separator">&gt;</span>
                <li>
                <a href="<?php echo site_url('/blog')?>">Insights</a>
                </li>
                <span aria-hidden="true" class="breadcrumb-separator">&gt;</span>
                <li>
                <a href="<?php echo the_permalink(); ?>" class="text-blue font-semibold"><?php echo the_title(); ?></a>
                </li>
                </li>
            </ol>
        </nav>
        </div>
        <!-- Hero Content -->
        <div class="singlePostHero_content__wrapper bg-blue rounded-2xl p-14">
            <div class="grid grid-cols-2 gap-4">
                <!-- Content -->
                <div class="my-auto">
                    <?php  
                    $post_date = get_the_date('jS F Y');
                    $singlePostHeroSubText = get_field('single_post_hero_subtext');
                    ?>
                    <span class="text-sm text-white text-start font-averta font-light "><?php echo date_create_from_format('jS F Y', $post_date)->format('jS F Y'); ?></span>
                    <h1 class="font-averta font-bold text-white text-4xl my-5 leading-tight"><?php echo the_title(); ?></h1>
                    <p class="font-averta text-sm font-medium text-white leading-snug mb-10"><?php echo $singlePostHeroSubText; ?></p>
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
                        <div class="font-averta font-bold text-lg text-white">Share:</div>
                        <div class="share-social_wrapper flex justify-start mt-2">
                            <!-- Linkedin sharing icon -->
                            <a href="<?php echo $linkedInUrl; ?>" target="_blank" class="sharing_socialMedia sharing_sociaMedia__linkedin__white mr-3"></a>
                            <!-- Twitter sharing icon -->
                            <a href="<?php echo $twitterUrl; ?>" target="_blank" class="sharing_socialMedia sharing_sociaMedia__twitter__white"></a>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Featured Image -->
                <div class="singlePost_image__wrapper flex justify-end my-auto">
                    <?php 
                        if ( has_post_thumbnail() ) {
                            $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                            $image_src = wp_get_attachment_image_src( $thumbnail_id, 'approach-thumbnail' );
                            $image_url = $image_src[0];
                            $image_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );

                            echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $image_alt ) . '" />';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Blocks -->
<section id="singlePostContentBlocks" class="py-14 bg-white">
    <div class="container mx-auto">
    <?php
        if( have_rows('content_blocks') ):
            while ( have_rows('content_blocks') ) : the_row(); ?>

                <div class="py-7">
                    <?php
                        include 'blocks/singlePost/' . get_row_layout() . '.php';
                    ?>
                </div>

            <?php
            endwhile;
        endif; 
    ?>
    </div>
</section>

<!-- Blog Section -->
<section id="Blog" class="pt-14 bg-white">
    <div class="container mx-auto">
        <h3 class="text-start text-black font-averta text-2xl font-bold">Insights & Events</h3>
        <!-- Post Carousel -->
        <?php 
        // The Query
        $blogArgs = array(
            'post_type' => 'post',   // Specify the custom post type
            'posts_per_page' => -1,      // Number of posts to display
            'orderby' => 'date',        // Order by date
            'order' => 'DESC',           // Sort in descending order
        );

        $blogQuery = new WP_Query($blogArgs); ?>


        <div class="owl-blog owl-carousel owl-theme my-8">
            <?php            
            // The Loop
            if ($blogQuery->have_posts()) :
                while ($blogQuery->have_posts()) : $blogQuery->the_post(); 
                
                $categories = get_the_category();
                ?>

                <div class="item blogCarousel_wrapper min-h-[450px]">
                    <?php the_post_thumbnail('post-carousel'); ?>
                    <div class="mt-3 mb-4">
                        <?php
                        foreach ( $categories as $category ) {
                            // Display the category name
                            echo '<span class="bg-blue py-1 px-3 rounded-lg text-white inline items-center text-medium font-normal">' . esc_html( $category->name ) . '</span>';
                        }
                        ?>
                    </div>
                    <h4 class="text-black font-averta font-bold text-lg mb-2"><?php echo the_title(); ?></h4>
                    <div class="text-black font-averta font-medium text-sm leading-tight">
                        <?php echo wp_trim_words(get_the_content(), 22);  ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0"></a>
                </div>

            <?php
                endwhile;
            else :
                // No posts found
                echo 'No testimonials found';
            endif; 
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer() ?>