<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<div id="content">
	<?php get_template_part( 'parts/home', 'slider' ); ?>
	<?php get_template_part( 'parts/home', 'headlineSlider' ); ?>
	<?php get_template_part( 'parts/home', 'masonery' ); ?>
	<?php get_template_part( 'parts/home', 'midBlocks' ); ?>
	<?php get_template_part( 'parts/home', 'sponsor' ); ?>
</div>
<?php get_footer(); ?>