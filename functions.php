<?php

if( ! function_exists('block_theme_support')):

    function block_theme_support(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails', array('post'));
    }


endif;
add_action( 'after_setup_theme', 'block_theme_support' );

// enqueue style
if( ! function_exists('block_theme_style')):
function block_theme_style(){


    wp_enqueue_style( 'blocktheme-main', get_template_directory_uri(  ) . '/assets/css/block.css', [] );
    wp_enqueue_style( 'block-stylesheet', get_stylesheet_uri() );
}
endif;
add_action( 'wp_enqueue_scripts', 'block_theme_style' );