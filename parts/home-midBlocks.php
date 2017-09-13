<div class="newsGridWrapper">
	<div class="row homeGrid nyheder">
		<div class="small-12 medium-12 large-3 columns">
			<h2>Nyheder</h2>
			<div class="smal-12 midBlock-bg">
				<?php $query = new WP_Query( 'post_type=nyheder&posts_per_page=4&post_status=publish&paged='. get_query_var('paged')); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="large-12 medium-12 newsheader">
					<?php get_template_part( 'parts/content', 'byline' ); ?>
					<h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
					<?php //the_excerpt (); ?>
				</div>
				<?php endwhile;  wp_reset_postdata(); else : ?>
				<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
				<?php endif; ?>
				<a href="<?php echo get_post_type_archive_link( 'nyheder' ); ?>">Se alle nyheder. . .</a>
			</div>
		</div>
		<div class="small-12 medium-4 large-3 columns">
			<?php $query = new WP_Query( 'order=desc&category_name=golf-ring&post_status=publish&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<h2><?php the_title() ; ?></h2>
			<div class="large-12 medium-12 " style="height:156px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
			<div class="smal-12 medium-12 large-12 midBlock-bg">
				<div class="large-12 medium-12 ">
					<?php the_excerpt (); ?>
				</div>
			</div>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
		<div class="small-12 medium-4 large-3 columns">
			<?php $query = new WP_Query( 'order=desc&category_name=golf-booklet&post_status=publish&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<h2><?php the_title() ; ?></h2>
			<div class="large-12 medium-12 " style="height:156px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
			<div class="smal-12 medium-12 large-12 midBlock-bg">
				<div class="large-12 medium-12 ">
					<?php the_excerpt (); ?>
				</div>

			</div>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
		<div class="small-12 medium-4 large-3 columns">
			<?php $query = new WP_Query( 'order=desc&category_name=business&post_status=publish&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<h2><?php the_title() ; ?></h2>
			<div class="large-12 medium-12 " style="height:156px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
			<div class="smal-12 medium-12 large-12 midBlock-bg">
				<div class="large-12 medium-12 ">
					<?php the_excerpt (); ?>
				</div>
			</div>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>