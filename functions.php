<?php

function rw_styles() {
    wp_register_style( 'parent-styles', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
    wp_register_style( 'child-styles', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'parent-styles' );
    // wp_enqueue_style( 'child-styles' );
}
add_action( 'wp_enqueue_scripts', 'rw_styles' );

//Allow html in category description

$filters = array('pre_term_description', 'pre_link_description', 'pre_link_notes', 'pre_user_description');

foreach ( $filters as $filter ) {

    remove_filter($filter, 'wp_filter_kses');
}

foreach ( array( 'term_description' ) as $filter ) {

    remove_filter( $filter, 'wp_kses_data' );
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {

    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

/**
 * Attach a class to linked images' parent anchors
 * e.g. a img => a.img img
 */

function give_linked_images_class($html, $id, $caption, $title, $align, $url, $size, $alt = '' ) {

    $classes = 'lightbox'; // separated by spaces, e.g. 'img image-link'

    // check if there are already classes assigned to the anchor

    if ( preg_match('/<a.*? class=".*?">/', $html) ) {

        $html = preg_replace('/(<a.*? class=".*?)(".*?>)/', '$1 ' . $classes . '$2', $html);

    } else {

        $html = preg_replace('/(<a.*?)>/', '$1 class="' . $classes . '" >', $html);

    }

    return $html;
}
add_filter('image_send_to_editor','give_linked_images_class',10,8);

// Register footer widgets
register_sidebar( array(
	'name' => __( 'Footer Widget One', 'tto' ),
	'id' => 'sidebar-4',
	'description' => __( 'Found at the bottom of every page (except 404s, optional homepage and full width) as the footer. Left Side.', 'tto' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => __( 'Footer Widget Two', 'tto' ),
	'id' => 'sidebar-5',
	'description' => __( 'Found at the bottom of every page (except 404s, optional homepage and full width) as the footer. Center.', 'tto' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => __( 'Footer Widget Three', 'tto' ),
	'id' => 'sidebar-6',
	'description' => __( 'Found at the bottom of every page (except 404s, optional homepage and full width) as the footer. Right Side.', 'tto' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => __( 'Footer Widget Four', 'tto' ),
	'id' => 'sidebar-7',
	'description' => __( 'Found at the bottom of every page (except 404s, optional homepage and full width) as the footer. Right Side.', 'tto' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
