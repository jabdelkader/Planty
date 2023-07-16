<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}



function pd_logout_menu_link( $menu_items, $args ) {
   if ($args->theme_location == 'primary') {
      if (is_user_logged_in()) {$menu_items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';
        // $menu_items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';//

         //resultat de la fonction get_admin_url()=http://localhost:81/Planty/wp-admin/

        //$menu_items .= '<li><a href="http://localhost:81/Planty/Admin/">Admin</a></li>';
      }
   }
   return $menu_items;
}
add_filter( 'wp_nav_menu_items', 'pd_logout_menu_link', 10, 2 );

