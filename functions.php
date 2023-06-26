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
