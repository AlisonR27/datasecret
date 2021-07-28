<?php

add_theme_support( 'post-thumbnails' );

//Estilos do tema
add_action( 'wp_enqueue_scripts', 'theme_assets' );
function theme_assets() {
  wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery-3.6.0.min',false);
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',false,'5.0.2','all');
  wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css',false,'1.0','all');
  wp_enqueue_script('bootstrapJS',get_template_directory_uri().'/assets/js/bootstrap.min.js',false);
  if (is_front_page()) {
    wp_enqueue_style('glider', get_template_directory_uri().'/assets/css/glider.min.css',false,'1.0','all');
    wp_enqueue_script('glider',get_template_directory_uri().'/assets/js/glider.min.js',false);  
  }
}
// Verifica SE NÃO É ADMIN 
if (!is_admin()):
else: 
  //Removendo comentários
  add_action('init', 'remove_comment_support', 100);
  function remove_comment_support() {
      remove_post_type_support( 'post', 'comments' );
      remove_post_type_support( 'page', 'comments' );
  }
  function mytheme_admin_bar_render() {
      global $wp_admin_bar;
      $wp_admin_bar->remove_menu('comments');
  }
  add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
endif;