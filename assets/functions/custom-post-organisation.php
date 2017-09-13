<?php
add_action( 'init', 'create_custom_organisation_post_type' );
/**
 * Register a Organisation post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'create_organisation_taxonomies', 0 );
function create_organisation_taxonomies() {
    register_taxonomy(
        'organisation_catagory',
        'organisation',
        array(
            'labels' => array(
                'name' => 'Organisation Catagories',
                'add_new_item' => 'Add Organisation Catagory',
                'new_item_name' => "New Organisation Catagory"

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

            $taxonomy = 'organisation_catagory';

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
function create_custom_organisation_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Organisation', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Organisation', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'All Organisation', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Organisation', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'Organisation', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add Organisation', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New  Organisation', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Organisation', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Organisation', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Organisation', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Organisation', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Organisation:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No Organisation found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No Organisation found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'organisation' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => true,
  'menu_icon'          => 'dashicons-images-alt',
  'taxonomy'           => 'organisation_catagory',
  'taxonomies' => array('post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats','page-attributes','revisions' )
 );

 register_post_type( 'organisation', $args );
}