<?php get_header(); ?>

<section id="search" class="py-36 bg-white">
    <div class="container mx-auto">
        <div class="mx-10">
            <h1 class="text-black font-averta text-4xl font-bold leading-tight">Search Results for: <?php echo get_search_query(); ?></h1>

            <?php if ( have_posts() ) : ?>
                <div class="search-results grid grid-cols-3 gap-10 pt-14">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="search-result-item">
                            <?php get_template_part('partials/post', 'card'); ?>
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
    </div>
</section>

<?php get_footer(); ?>