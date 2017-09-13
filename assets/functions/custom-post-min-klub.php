<?php
add_action( 'init', 'create_custom_min_klub_post_type' );
/**
 * Register a Min Klub post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'create_club_taxonomies', 0 );
function create_club_taxonomies() {
    register_taxonomy(
        'min_club_catagory',
        'min-klub',
        array(
            'labels' => array(
                'name' => 'Min Klub Catagories',
                'add_new_item' => 'Add New Min Klub Catagory',
                'new_item_name' => "New Min Klub Catagory"

            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_admin_column' => true,
          'rewrite' => array( 'hierarchical' => true, 'with_front' => false ),
        )
    );
}
add_filter( 'post_class', 'custom_taxonomy_post_class', 10, 3 );

    if( !function_exists( 'custom_taxonomy_post_class' ) ) {

        function custom_taxonomy_post_class( $classes, $class, $ID ) {

            $taxonomy = 'min_club_catagory';

            $terms = get_the_terms( (int) $ID, $taxonomy );

            if( !empty( $terms ) ) {

                foreach( (array) $terms as $order => $term ) {

                    if( !in_array( $term->slug, $classes ) ) {

                        $classes[] = $term->slug;

                    }

                }

            }

            return $classes;

        }

    }
function create_custom_min_klub_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Min Klubs', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Min Klub', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Min Klubs', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Min Klub', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'Min Klub', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New Klub', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New  Klub', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Klub', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Klub', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Klubs', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Klub', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Klub:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No Klubs found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No Klubs found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'min-klubs' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => true,
  'menu_icon'          => 'dashicons-networking',
  'taxonomy'           => 'min_club_catagory',
  'taxonomies' => array('post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats','page-attributes','revisions' )
 );

 register_post_type( 'min-klub', $args );
}