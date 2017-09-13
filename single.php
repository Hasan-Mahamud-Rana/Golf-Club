<?php get_header(); ?>
<div id="content">
	<div class="row singlePgeBanner">
		<?php if(wp_get_attachment_url( get_post_thumbnail_id($post->ID) )):?>
		<div class="medium-12 large-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
		<?php else:?>
		<div class="medium-12 large-12" style="height:245px;background-size: cover; background-image: url(http://test.bordingvista.com/mollerupgolfclub.dk/wp-content/uploads/2016/05/default.jpg)"></div>
		<?php endif;?>
	</div>
	<div id="inner-content" class="row inner-page" data-equalizer>
		<div class="small-12 medium-3 large-3 float-left">
			<h5><?php the_title(); ?></h5>
		</div>
		<div class="small-12 medium-12 large-9 columns">
			<?php get_template_part( 'parts/inner', 'loop' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>