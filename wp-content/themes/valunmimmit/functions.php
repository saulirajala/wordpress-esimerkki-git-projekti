<?php
/**
 * Valun Mimmit functions and definitions
 *
 */


add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


/**
 * Theme setup
 */
function setup() {

}

add_action( 'after_setup_theme', 'setup' );
