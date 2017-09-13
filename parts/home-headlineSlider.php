<div class="new-rules">
	<div class="row">
		<div class="small-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
				<div class="slideHeadline" style="display: none;">
					<?php $query = new WP_Query( 'order=asc&post_type=bane-status&post_status=publish&paged='. get_query_var('paged')); ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php if (empty(get_field('link_with')) && empty(get_field('file_link'))){ ?>
					<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
					<?php } ?>
					<?php if(empty(get_field('link_with'))) { ?>
					<a href="<?php the_field('file_link') ?>"><p><?php the_title(); ?></p></a>
					<?php } else { ?>
					<a href="<?php the_field('link_with') ?>"><p><?php the_title(); ?></p></a>
					<?php } ?>
					<?php endwhile;  wp_reset_postdata(); else : ?>
					<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
					<?php endif; ?>
				</div>
			</article>
		</div>
	</div>
</div>