<?php
/* Template Name: Inner Page Template */
?>
<?php get_header(); ?>
    <div class="banner relative min-h-[150px] md:min-h-[200px] lg:min-h-[300px] grid place-content-center bg-no-repeat bg-top bg-cover"
        style="background-image:url('<?php bloginfo(
            "template_url"
        ); ?>/assets/bannerbackground.svg');"
        >
        <h1 class="text-center text-3xl md:text-4xl lg:text-6xl font-bold text-secondaryBlue mb-3">
            <?php the_title(); ?>
        </h1>
        <h4 class="text-center font-light">
        <?php echo the_field("page_subtitle"); ?>
        </h4>
    </div>
    <main class="page-single-location py-8">
        <div class="container">
        <?php // Check rows exists.
        if (have_rows("page_sections")):
            // Loop through rows.
            while (have_rows("page_sections")):

                the_row();
                // Load sub field value.
                $section_title = get_sub_field("section_title");
                $section_text = get_sub_field("section_text");
                $section_image_url = get_sub_field("section_image");
                ?>
                    <section class="grid grid-cols-2 gap-4 items-center py-6">
                        <div class="section-text">
                            <h2 class="text-3xl mb-2 font-semibold"><?php echo $section_title; ?></h2>
                            <p><?php echo $section_text; ?></p>
                            <?php if (get_sub_field("has_button")): ?>
                            <button class="bg-green text-zinc-50 py-1.5 px-3 rounded">
                                <a href="<?php echo get_sub_field(
                                    "button_link"
                                ); ?>">
                                    <?php echo get_sub_field("button_text"); ?>
                                </a>
                            </button>
                            <?php else:endif; ?>
                        </div>
                        <?php if (
                            get_sub_field("image_placement") == "right"
                        ): ?>
                        <img  src="<?php echo $section_image_url; ?>" alt="" class="w-full order-last">
                        <?php else: ?>
                        <img  src="<?php echo $section_image_url; ?>" alt="" class="w-full order-first">
                        <?php endif; ?>
                    </section>
                <?php
            endwhile;
        else:

            // Do something...
        endif; ?>
        </div>
    </main>

<?php get_footer(); ?>
