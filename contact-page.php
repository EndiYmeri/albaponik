<?php
/* Template Name: Contact Page Template */
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
    </div>
    <main class="contact-page-template container mx-auto">
        <div class="contact-info">
            <div class="flex justify-center py-5 my-8">
                <div class="grid justify-items-center">
                    <div class="flex items-center gap-4 mb-2" >
                        <h3 class="text-3xl font-semibold">
                            <?php echo the_field("email_info_text"); ?>
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                            <style>svg{fill:#2e9643}</style>
                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/>
                        </svg>
                    </div>
                    <p>
                        <?php echo the_field("email"); ?>
                    </p>
                </div>
                <div class="grid justify-items-center border-l border-gray border-r px-10 mx-10">
                    <div class="flex items-center gap-4 mb-2">
                        <h3 class="text-3xl font-semibold">
                            <?php echo the_field("phone_info_text"); ?>
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                            <style>svg{fill:#2e9643}</style>
                            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                        </svg>
                    </div>
                    <p>
                        <?php echo the_field("phone_number"); ?>
                    </p>
                </div>
                <div class="grid justify-items-center">
                    <div class="flex items-center gap-4 mb-2">
                        <h3 class="text-3xl font-semibold">
                            <?php echo the_field("location_info_text"); ?>
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512">
                            <style>svg{fill:#2e9643}</style>
                            <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                        </svg>
                    </div>
                    <p>
                    <?php echo the_field("location"); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="contact-form w-11/12  max-w-[900px] mx-auto">
            <?php if (get_field("contact_form_shortcode")) {
                echo do_shortcode(get_field("contact_form_shortcode"));
            } ?>
        </div>
    </main>


<?php get_footer(); ?>
