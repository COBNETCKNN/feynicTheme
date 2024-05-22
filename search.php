<?php get_header(); ?>

<section id="search" class="py-36 bg-white">
    <div class="container mx-auto">
        <h1 class="text-black font-averta text-4xl font-bold leading-tight">Search Results for: <?php echo get_search_query(); ?></h1>

        <?php if ( have_posts() ) : ?>
            <div class="search-results grid grid-cols-3 gap-10 py-14">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="search-result-item">
                        <div class="item blogCarousel_wrapper relative">
                            <?php the_post_thumbnail('archive-featured'); ?>
                            <div class="min-h-[150px] flex justify-start items-center">
                                <h4 class="text-black font-averta font-bold text-xl my-3"><?php echo the_title(); ?></h4>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="bg-blue py-2 px-4 font-averta font-bold text-sm text-white rounded-lg mt-2">Read more</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="no-results mt-14">
                <h2 class="text-black font-averta text-2xl font-medium leading-tight">No results found</h2>
                <p class="text-black font-averta text-xl font-light leading-tight">Sorry, but nothing matched your search terms. Please try again with different keywords.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>