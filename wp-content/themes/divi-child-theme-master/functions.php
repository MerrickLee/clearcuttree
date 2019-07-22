<?php
/**
 * Custom Functions file for current theme.
 *
 */

// IMPORT PARENT STYLE
function child_theme_enqueue_styles() {
    $parent_style = 'divi-style'; // This is 'divi-style' for the Divi theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );


add_image_size( 'tenx-thumb', 300, 300, true ); // Permalink thumbnail size

// Adds Custom Post Type for FAQs
add_action('init', 'faqs_register');
function faqs_register() {
    $labels = array(
    'name'						=> _x('FAQs','SEOteric'),
    'singular_name'         	=> _x('FAQ','SEOteric'),
    'all_items'					=> __('All FAQs','SEOteric'),
    'add_new'					=> _x('Add FAQ','SEOteric'),
    'add_new_item'          	=> __('Add FAQ','SEOteric'),
    'edit_item'					=> __('Edit FAQ','SEOteric'),
    'new_item'					=> __('New FAQ','SEOteric'),
    'view_item'					=> __('View FAQ','SEOteric'),
    'search_items'          	=> __('Search FAQs','SEOteric'),
    'not_found'					=> __('Nothing found','SEOteric'),
    'not_found_in_trash'        => __('Nothing found in Trash','SEOteric'),
    'parent_item_colon'     	=> ''
    );

    $args = array(
	'labels'            => $labels,
	'supports'              => array( ),
	'menu_icon' => 'dashicons-editor-help',
    'rewrite' => array( 'slug' => _x('faqs', 'faqs','SEOteric' ) ),
	'hierarchical'          => true,
	'public'                => true,
	'show_ui'               => true,
	'show_in_menu'          => true,
	'menu_position'         => 5,
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'can_export'            => true,
	'has_archive'           => true,		
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'capability_type'       => 'page',); 
	
register_post_type( 'faqs' , $args ); 
flush_rewrite_rules();

}


?>
