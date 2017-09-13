<?php
add_action( 'init', 'create_custom_gaester_post_type' );
/**
 * Register a Gæster post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'create_gaester_taxonomies', 0 );
function create_gaester_taxonomies() {
    register_taxonomy(
        'gaester_catagory',
        'gaester',
        array(
            'labels' => array(
                'name' => 'Gaester Catagories',
                'add_new_item' => 'Add Gaester Catagory',
                'new_item_name' => "New Gaester Catagory"

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

            $taxonomy = 'gaester_catagory';

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
function create_custom_gaester_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Gæster', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Gæster', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'All Gæster', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Gæster', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'Gæster', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add Gæster', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New  Gæster', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Gæster', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Gæster', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Gæster', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Gæster', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Gæster:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No Gæster found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No Gæster found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'gaester' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-images-alt',
  'taxonomy'           => 'gaester_catagory',
  'taxonomies' => array('post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats','revisions' )
 );

 register_post_type( 'gaester', $args );
}