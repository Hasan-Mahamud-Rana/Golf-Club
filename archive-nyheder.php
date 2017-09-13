<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="row nyhederPanel">
		<div class="large-12 medium-12 small-12 columns" role="main">
			<h3>Nyheder</h3>
			<hr>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'parts/loop', 'archive' ); ?>
			<?php endwhile; ?>
			<?php joints_page_navi(); ?>
			<?php else : ?>
			<?php get_template_part( 'parts/content', 'missing' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>