<?php

/**
 * Proper way to enqueue scripts and styles
 */

add_action( 'init', 'create_custom_bane_status_post_type' );
/**
 * Register a Bane Status post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */    
function create_custom_bane_status_post_type() {

  /* Register our stylesheet. */
  $labels = array(
    'name'               => _x( 'Bane Status', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Bane Status', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Bane Status', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Bane Status', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Bane Status', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Bane Status', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Bane Status', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Bane Status', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Bane Status', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Bane Status', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Bane Status', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Bane Status:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Bane Status found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Bane Status found in Trash.', 'your-plugin-textdomain' )
    );

$args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'bane-status' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => true,
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt','revisions')
  );

register_post_type( 'bane-status', $args );
}