<?php get_header() ?>

<section id="hero" class="py-14">
    <div class="container mx-auto">
        <div class="mx-10">
            <div class="grid grid-cols-5 gap-4">
                <!-- Content Area -->
                <div class="col-span-2">
                <?php if( have_rows('homepage_hero_section') ): ?>
                    <?php while( have_rows('homepage_hero_section') ): the_row(); 

                        // Get sub field values.
                        $heroHeading = get_sub_field('homepge_hero_title');
                        $heroSubText = get_sub_field('homepage_hero_subtext');

                        ?>

                        <h1 class="text-black font-averta text-6xl font-bold w-[50%] leading-tight mb-5"><?php echo $heroHeading; ?></h1>
                        <p class="font-averta text-lg font-medium leading-snug w-[80%]"><?php echo $heroSubText; ?></p>

                    <?php endwhile; ?>
                <?php endif; ?>

                </div>
                <!-- Who We Work With -->
                <div class="col-span-3">

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>