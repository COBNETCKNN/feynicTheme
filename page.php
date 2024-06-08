<?php get_header() ?>

<section id="pageTemplate" class="py-24 bg-white dark:bg-zinc-800">
    <div class="container mx-auto">
        <div class="lg:mx-10">
            <h1 class="text-center text-black dark:text-white font-averta font-bold text-5xl mb-10"><?php the_title(); ?></h1>
            <div class="pageContent_wrapper font-averta text-black dark:text-white">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>