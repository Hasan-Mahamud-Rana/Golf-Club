<?php
/*
Template Name: Business
*/
?>
<?php get_header(); ?>
<div id="content">
	<div class="row singlePgeBanner">
		<div class="medium-12 large-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
	</div>
	<div class="row inner-page">
		<div class="small-12 medium-3 large-3 columns parentNav">
			<?php get_template_part( 'parts/business', 'posts' ); ?>
		</div>
<?php get_template_part( 'parts/third', 'block' ); ?>
</div>
<?php get_footer(); ?>

