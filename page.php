<?php get_header() ?>

<section id="pageTemplate" class="py-24 bg-white">
    <div class="container mx-auto">
        <div class="mx-10">
            <h1 class="text-center text-black font-averta font-bold text-5xl mb-10"><?php the_title(); ?></h1>
            <div class="pageContent_wrapper font-averta">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>