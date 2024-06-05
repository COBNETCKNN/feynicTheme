<?php get_header() ?>

<!-- Hero Section -->
<section id="singlePostHero" class="py-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs_wrapper relative z-10">
        <nav role="navigation" aria-label="Feynic navigation" class="breadcrumb font-averta text-sm text-black font-light mb-10">
            <ol>
                <li>
                <a class="text-black dark:text-white" href="<?php echo site_url(); ?>">Home</a>
                </li>
                <span aria-hidden="true" class="breadcrumb-separator text-black dark:text-white">&gt;</span>
                <li>
                <a class="text-black dark:text-white" href="<?php echo site_url('/blog')?>">Insights</a>
                </li>
                <span aria-hidden="true" class="breadcrumb-separator text-black dark:text-white">&gt;</span>
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
<section id="singlePostContentBlocks" class="py-14 bg-white dark:bg-zinc-800">
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
<section id="Blog" class="pt-14 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <?php get_template_part('partials/blog', 'carousel'); ?>
    </div>
</section>

<?php get_footer() ?>