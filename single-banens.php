<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.
i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php
*/
?>
<?php get_header(); ?>
<div id="content">
	<div class="row singlePgeBanner">
		<div class="medium-12 large-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
	</div>
	<div class="row inner-page">
		<div class="small-12 medium-3 large-3 columns singleNav">
            <h5><a href="<?php echo get_page_link(251); ?>">Banen</a></h5>
			<h4><?php the_title(); ?></h4>
		</div>
<?php get_template_part( 'parts/third', 'block' ); ?>
	</div>
<?php get_footer(); ?>