<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 */
add_action( 'wp_enqueue_scripts', 'pmbath_enqueue_child_theme_styles');
function pmbath_enqueue_child_theme_styles() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
