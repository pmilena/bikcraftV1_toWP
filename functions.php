<?php
// Habilitar Menus
add_theme_support('menus');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'wp_generator' );

//Configurar imagens responsivas
function my_custom_sizes(){
  add_image_size('large',1400, 380, true);
  add_image_size ('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');
?>

