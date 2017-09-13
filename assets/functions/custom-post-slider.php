<?php

/**
 * Proper way to enqueue scripts and styles
 */

add_action( 'init', 'create_custom_slider_post_type' );
add_filter('pll_get_post_types', 'my_pll_get_post_types');
function my_pll_get_post_types($types) {
  return array_merge($types, array('slide' => 'slide'));
}
/**
 * Register a Slide post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_slider_post_type() {

  /* Register our stylesheet. */
  $labels = array(
    'name'               => _x( 'Slides', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Slide', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Slides', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Slide', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Slide', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Slide', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Slide', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Slide', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Slide', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Slides', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Slides', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Slides:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Slides found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Slides found in Trash.', 'your-plugin-textdomain' )
    );

$args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'slide' ),
  'capability_type'    => 'page',
  'has_archive'        => true,
  'hierarchical'       => true,
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt','revisions')
  );
  register_post_type( 'slide', $args );
}


//Gets the  number of Post Views to be used later.
function get_PostImage($post_ID){
   $post_image_id = get_post_thumbnail_id($post_ID);
    if ($post_image_id) {
        $post_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        return $post_img_url;
    }
}

function post_column_image($newcolumn){
    $newcolumn['featured_image'] = __('Image');
    $newcolumn['column_excerpt'] = 'Excerpt';
    return $newcolumn;
}

function post_custom_column_image($column_name, $id){
      if($column_name === 'featured_image'){
        //echo get_PostImage(get_the_ID());
        echo '<img src="' . get_PostImage(get_the_ID()) . '" height="90" width="auto" />';
      }
      if($column_name === 'column_excerpt'){
        //echo get_PostImage(get_the_ID());
        echo get_the_excerpt($post_ID);
      }
}

add_filter('manage_slide_posts_columns', 'post_column_image');
add_action('manage_slide_posts_custom_column', 'post_custom_column_image',10,2);