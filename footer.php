<?php 
$address = get_option( 'footer_address' );
$logo_url = get_option( 'footer_logo_url' );
$phone = get_option( 'footer_phone' );
$email = get_option( 'footer_email' );
?>
<?php wp_footer(); ?>
<footer class="bg-darkBack text-zinc-50 text-center">
    <div class="footer-top">
        <div class="container grid justify-center py-8">
                <div class="privacy-policies">
                    <div class="flex flex-row gap-2 justify-center">
                        <a href="#" class="text-lightblue">Privacy Policy</a>
                        |
                        <a href="#" class="text-lightblue">Cookie Policy</a>
                    </div>
                </div>
                <div class="address">
                  <?php echo $address; ?>
                </div>
                <div class="contact flex flex-row gap-5 items-center justify-center ">
                    <a href="tel:<?php echo $phone;?>" class="flex flex-row gap-2 items-center text-lightblue">
                        <svg height="1em" viewBox="0 0 512 512">
                            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                            <?php echo $phone;?>
                    </a>
                    <a class="flex flex-row gap-2 items-center text-lightblue " href="mailto:<?php echo $email;?>">
                        <svg height="1em" viewBox="0 0 512 512">
                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/>
                        </svg>
                        <?php echo $email;?>
                    </a>
                </div>
                <div class="mx-auto my-4">
                <a href="<?php echo site_url(); ?>">
                    <img  src="<?php echo $logo_url; ?>" alt="" srcset="" class="h-[50px]" >
                    </a>
                </div>
        </div>
    </div>
</footer>
<script src="<?php bloginfo("template_url"); ?>/app.js"></script>
</body>