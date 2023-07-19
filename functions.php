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
