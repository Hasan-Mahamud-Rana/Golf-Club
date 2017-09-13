<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/menu-walkers.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');
require_once(get_template_directory().'/assets/functions/custom-post-min-klub.php');
require_once(get_template_directory().'/assets/functions/custom-post-banen.php');
require_once(get_template_directory().'/assets/functions/custom-post-gaester.php');
require_once(get_template_directory().'/assets/functions/custom-post-organisation.php');
require_once(get_template_directory().'/assets/functions/custom-post-slider.php');
require_once(get_template_directory().'/assets/functions/custom-post-nyheder.php');
require_once(get_template_directory().'/assets/functions/custom-post-bane-status.php');
// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');
if( ! function_exists('tagpages_register_taxonomy') ){
    function tagpages_register_taxonomy()
    {
        register_taxonomy_for_object_type('post_tag', 'page');
    }
    add_action('admin_init', 'tagpages_register_taxonomy');
}

/**
 * Display all post_types on the tags archive page. This forces WordPress to
 * show tagged Pages together with tagged Posts. Thanks to Page Tagger by
 * Ramesh Nair: http://wordpress.org/extend/plugins/page-tagger/
 */
if( ! function_exists('tagpages_display_tagged_pages_archive') ){
    function tagpages_display_tagged_pages_archive(&$query)
    {
        if ( $query->is_archive && $query->is_tag ) {
            $q = &$query->query_vars;
            $q['post_type'] = 'any';
        }
    }
    add_action('pre_get_posts', 'tagpages_display_tagged_pages_archive');
}


// apply tags to attachments
function wptp_add_tags_to_attachments() {
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
add_action( 'init' , 'wptp_add_tags_to_attachments' );

add_filter( 'all_plugins', 'hide_plugins');
function hide_plugins($plugins)
{
     // Hide Email subscribers plugin
    if(is_plugin_active('email-subscribers/email-subscribers.php')) {
        unset( $plugins['email-subscribers/email-subscribers.php'] );
    }
    return $plugins;
}

function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}
add_action( 'customize_register', 'm1_customize_register' );
function admin_add_wysiwyg_custom_field_textarea()
{ ?>
<script type="text/javascript">/* <![CDATA[ */
    jQuery(function($){
        var i=1;
        $('.widefat textarea').each(function(e)
        {
          var id = $(this).attr('id');
          if (!id)
          {
           id = 'customEditor-' + i++;
           $(this).attr('id',id);
          }
          tinyMCE.execCommand('mceAddControl', false, id);
        });
    });
/* ]]> */</script>
<?php }
add_action( 'admin_print_footer_scripts', 'admin_add_wysiwyg_custom_field_textarea', 99 );