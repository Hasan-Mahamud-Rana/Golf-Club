<div class="sponsorGridWrapper">
	<div class="row homeGrid">
		<div class="small-12 medium-4 large-3 columns">
			<div class="small-12 hovedsponsor">
				<?php $query = new WP_Query( 'order=asc&category_name=hovedsponsor&post_status=publish&paged='. get_query_var('paged')); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<h5><?php the_title() ; ?></h5>
				<div class="large-12 medium-12 text-center" style="height:156px;background-repeat: no-repeat;background-position: center center; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
					<?php the_content() ; ?>
				</div>
				<?php endwhile;  wp_reset_postdata(); else : ?>
				<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="small-12 medium-8 large-9 columns sponsor">
			<h5>Sponsorer</h5>
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
				<section class="entry-content" itemprop="articleBody">
					<?php the_content(); ?>
				</section>
			</article>
		</div>
	</div>
</div>