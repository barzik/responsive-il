<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Register our sidebars and widgetized areas.
 *
 */
function responsive_il_register_widgets() {
	register_sidebar( array(
		'name' => 'Home half widget',
		'id' => 'main-half-sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Footer bottom text area',
		'id' => 'footer-bottom',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Single footer',
		'id' => 'single-footer-bottom',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Single Top head',
		'id' => 'single-top-head',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'responsive_il_register_widgets' );	
remove_action('wp_head', 'wp_generator'); //we don't need no generator
	
/**
 * This function prints post meta data.
 */
if( ! function_exists( 'responsive_il_post_meta_data' ) ) :

	function responsive_il_post_meta_data() {
		printf( __( '<span class="%1$s">Posted on </span>%2$s<span class="%3$s"> by </span>%4$s', 'responsive' ),
				'meta-prep meta-prep-author posted',
				sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="timestamp updated">%3$s</span></a>',
						 esc_url( get_permalink() ),
						 esc_attr( get_the_time() ),
						 esc_html( get_the_date() )
				),
				'byline',
				sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
						 "/about" ,
						 esc_attr( get_the_author()),
						 esc_attr( get_the_author())
				)
		);
	}
	
endif;
