<?php
add_action( 'init', 'create_custom_banen_post_type' );
/**
 * Register a Banens post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'create_banen_taxonomies', 0 );
function create_banen_taxonomies() {
    register_taxonomy(
        'banen_catagory',
        'banens',
        array(
            'labels' => array(
                'name' => 'Banen Catagories',
                'add_new_item' => 'Add New Banen Catagory',
                'new_item_name' => "New Banen Catagory"

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

            $taxonomy = 'banen_catagory';

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
function create_custom_banen_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Banens', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Banen', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'All Banens', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Banens', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'Banen', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add Banen', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New  Banen', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Banen', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Banen', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Banen', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Banen', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Banen:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No Banen found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No Banen found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'banens' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-media-document',
  'taxonomy'           => 'banen_catagory',
  'taxonomies' => array('post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats','revisions' )
 );

 register_post_type( 'banens', $args );
}