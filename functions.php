<?php
add_theme_support("menus");
add_theme_support("widgets");
add_theme_support("post-thumbnails");
// ADD MENU SUPPORT
add_theme_support("nav-menus");

// function albaponik_widgets_init()
// {
//     register_sidebar([
//         "name" => __("Language Switcher", "albaponik-theme"),
//         "id" => "sidebar-1",
//         "before_widget" => '<aside id="%1$s" class="widget %2$s">',
//         "after_widget" => "</aside>",
//         "before_title" => '<h3 class="widget-title">',
//         "after_title" => "</h3>",
//     ]);
// }

// add_action("widgets_init", "albaponik_widgets_init");

function register_my_menus()
{
    register_nav_menus([
        "header-menu" => __("Header Menu"),
        "mobile-menu" => __("Mobile Menu"),
        "footer-menu" => __("Footer Menu"),
    ]);
}
add_action("init", "register_my_menus");

// Method 1: Filter.
function my_acf_google_map_api($api)
{
    $api["key"] = "AIzaSyCZfj4XaiQUIjiYkc4JbjOa3vV8DeOIQk0";
    return $api;
}
add_filter("acf/fields/google_map/api", "my_acf_google_map_api");

// Method 2: Setting.
function my_acf_init()
{
    acf_update_setting(
        "google_api_key",
        "AIzaSyCZfj4XaiQUIjiYkc4JbjOa3vV8DeOIQk0"
    );
}
add_action("acf/init", "my_acf_init");

// create custom plugin settings menu
add_action('admin_menu', 'header_footer_settings_create_menu');

function header_footer_settings_create_menu() {
    // Create new top-level menu
    add_menu_page('Header & Footer Settings', 'Header & Footer', 'administrator', __FILE__, 'header_footer_settings_page', plugins_url('/images/icon.png', __FILE__));

    // Call register settings function
    add_action('admin_init', 'register_header_footer_settings');
}

function register_header_footer_settings() {
    // Register our settings
    register_setting('header_footer_settings', 'header_logo_url'); // Assuming this is the option name for the image
    register_setting('header_footer_settings', 'header_phone');
    register_setting('header_footer_settings', 'header_phone');
    register_setting('header_footer_settings', 'header_socialIcon_facebook'); // Assuming this is the option name for the image
    register_setting('header_footer_settings', 'header_socialIcon_instagram'); // Assuming this is the option name for the image
    register_setting('header_footer_settings', 'header_socialIcon_youtube'); // Assuming this is the option name for the image
    register_setting('header_footer_settings', 'header_socialIcon_linkedin'); // Assuming this is the option name for the image
    register_setting('header_footer_settings', 'footer_logo_url');
    register_setting('header_footer_settings', 'footer_address');
    register_setting('header_footer_settings', 'footer_phone'); // Assuming this is the option name for the image
    register_setting('header_footer_settings', 'footer_email'); // Assuming this is the option name for the image
}

function header_footer_settings_page() {
    // Handle file upload
    if (isset($_FILES['footer_logo']) && current_user_can('upload_files')) {
        handle_footer_logo_upload();
    }

    ?>
    <div class="wrap">
        <h1>Header & Footer Settings</h1>

        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php settings_fields('header_footer_settings'); ?>
            <?php do_settings_sections('header_footer_settings'); ?>
            <table class="form-table">
                <tr>
                    <th scope="row" style="font-size:larger;">Header Settings</th>
                </tr>
                <tr valign="top">
                    <th scope="row">Header Phone</th>
                    <td><input type="text" style="width:100%;" name="header_phone" value="<?php echo esc_attr(get_option('header_phone')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Header Logo Url</th>
                    <td><input type="text" style="width:100%;" name="header_logo_url" value="<?php echo esc_attr(get_option('header_logo_url')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Header Facebook Url</th>
                    <td><input type="text" style="width:100%;" name="header_socialIcon_facebook" value="<?php echo esc_attr(get_option('header_socialIcon_facebook')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Header Instagram Url</th>
                    <td><input type="text" style="width:100%;" name="header_socialIcon_instagram" value="<?php echo esc_attr(get_option('header_socialIcon_instagram')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Header Youtube Url</th>
                    <td><input type="text" style="width:100%;" name="header_socialIcon_youtube" value="<?php echo esc_attr(get_option('header_socialIcon_youtube')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Header LinkedIn Url</th>
                    <td><input type="text" style="width:100%;" name="header_socialIcon_linkedin" value="<?php echo esc_attr(get_option('header_socialIcon_linkedin')); ?>" /></td>
                </tr>
                <tr>
                <th scope="row" style="font-size:larger;">Footer Settings</th>
                </tr>
                <tr valign="top">
                    <th scope="row">Footer Logo Url</th>
                    <td><input type="text" style="width:100%;" name="footer_logo_url" value="<?php echo esc_attr(get_option('footer_logo_url')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row" >Footer Adress</th>
                    <td><input type="text" style="width:100%;" name="footer_address" value="<?php echo esc_attr(get_option('footer_address')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Footer Phone</th>
                    <td><input type="text" style="width:100%;" name="footer_phone" value="<?php echo esc_attr(get_option('footer_phone')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Footer Email</th>
                    <td><input type="text" style="width:100%;" name="footer_email" value="<?php echo esc_attr(get_option('footer_email')); ?>" /></td>
                </tr>
                
                <!-- <tr>
                    <th scope="row">Footer Logo</th>
                    <td>
                        <?php 
                            $img_id = get_option("footer_logo");
                            if ($img_id) {
                                $img_url = wp_get_attachment_image_src($img_id, 'full');
                                if ($img_url) {
                                    ?>

                                    <img src="<?php esc_url($img_url[0]); ?>" alt="Footer Logo" style="max-width: 100px; height: auto;" /><br>
                                <?php
                                }
                            }
                        ?>
                        <input type="file" name="footer_logo"/>
                    </td>
                </tr> -->
            </table>
            
            <?php submit_button(); ?>

        </form>
    </div>
    <?php
}

function handle_footer_logo_upload() {
    if (!function_exists('wp_handle_upload')) {
        require_once(ABSPATH . 'wp-admin/includes/file.php');
    }

    $uploadedfile = $_FILES['footer_logo'];
    $upload_overrides = array('test_form' => false);
    $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

    if ($movefile && !isset($movefile['error'])) {
        $wp_filetype = wp_check_filetype(basename($movefile['file']), null);
        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => sanitize_file_name(basename($movefile['file'])),
            'post_content' => '',
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, $movefile['file']);
        update_option('footer_logo', $attach_id);
    }
}

add_action('admin_enqueue_scripts', function() {
    if (isset($_GET['page']) && $_GET['page'] === basename(__FILE__)) {
        wp_enqueue_media();
    }
});

