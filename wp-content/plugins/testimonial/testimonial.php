<?php
/**
 * Plugin Name: Testimonial
 * Description: A plugin to manage testimonials
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'init', 'testimonial_register_testimonial_post_type' );
function testimonial_register_testimonial_post_type() {
    $args = array(
       'labels' => array(
           'name'          => 'Testimonials',
           'singular_name' => 'Testimonial',
           'menu_name'     => 'Testimonials',
           'add_new'       => 'Add New Testimonial',
           'add_new_item'  => 'Add New Testimonial',
           'new_item'      => 'New Testimonial',
           'edit_item'     => 'Edit Testimonial',
           'view_item'     => 'View Testimonial',
           'all_items'     => 'All Testimonials',
       ),
       'public' => true,
       'has_archive' => true,
       'show_in_rest' => true,
       'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
   );

   register_post_type( 'testimonial', $args );
}
