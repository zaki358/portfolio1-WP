<?php

function setup()
{
   add_theme_support('post-thumbnails');
   add_theme_support('html5', array( /* HTML5のタグで出力 */
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
   ));
}
add_action("after_setup_theme", "setup");

function script(){
   wp_enqueue_style('Mincho', '//fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700&display=swap', array());
   wp_enqueue_style('Potta', '//fonts.googleapis.com/css2?family=Potta+One&display=swap', array());
   wp_enqueue_style('portfolio', get_template_directory_uri().'./css/style.css',array(), '1.0.0');
   wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), '1.0.0' );
   wp_enqueue_script('pace', get_template_directory_uri().'./script/pace.js', array(), '1.0.0');
}
