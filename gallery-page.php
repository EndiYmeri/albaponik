<?php
/* Template Name: Gallery Template */
?>
<?php get_header(); ?>
    <div class="banner relative min-h-[200px] md:min-h-[300px] lg:min-h-[400px] grid place-content-center"
        >
        <div class="absolute w-full h-full -z-10 brightness-50 bg-no-repeat bg-cover" 
            style="background-image:url('<?php the_field(
                "page_banner"
            ); ?>')" ></div>
        <h1 class=" text-3xl md:text-4xl lg:text-6xl font-bold text-zinc-50">
            <?php the_title(); ?>
        </h1>
    </div>
    <main class="page-single-location py-8">
        <div class="container">
            <h2 class="text-2xl md:text-3xl lg:text-5xl font-bold text-center mb-8">
                Gallery
            </h2>
            <?php
            $images = get_field("gallery_images");
            if ($images): ?>
                    <div class="columns-1 md:columns-3 lg:columns-4 gap-4">
                        <?php foreach ($images as $image): ?>
                                <a href="<?php echo esc_url($image); ?>">
                                    <img
                                        class="mb-4"
                                        src="<?php echo esc_url($image); ?>" 
                                        alt="<?php echo esc_attr($image); ?>"
                                     />
                                </a> 
                        <?php endforeach; ?>
                    </div>
                <?php endif;
            ?>
        </div>
    </main>

<?php get_footer(); ?>
