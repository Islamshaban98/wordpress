<?php
function word_files()
{
     wp_enqueue_script('jquery_file',get_theme_file_uri('./assets/js/jquery-3.5.1.min.dc5e7f18c8f1e6.js'));
     wp_enqueue_script('jquery_file');
     wp_enqueue_script('webflow_file',get_theme_file_uri('./assets/js/webflow.9bc25b6fa.js'));
     wp_enqueue_script('webflow_file');
     wp_enqueue_style('world_main_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts',"word_files");
// show menus in appearance
add_theme_support('menus');
add_theme_support('post-thumbnails');
// Display location
register_nav_menus(
     array(
          'top-menu'=> __("Top Menu", "theme"),
     )
)
?>