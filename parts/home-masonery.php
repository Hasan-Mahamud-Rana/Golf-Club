<div class="homeGridWrapper">
	<div class="row homeGrid">
		<div class="small-12 medium-4 large-6 columns opDevice">
			<?php $query1 = new WP_Query( 'tag=block-1&post_type=attachment&post_status=inherit&post_mime_type=image/jpeg,image/gif,image/jpg,image/png'); 
			//print_r($query1);
			?>
			<?php if ( $query1->have_posts() ) : while ( $query1->have_posts() ) : $query1->the_post(); 
			
			 $meta = wp_get_attachment_metadata($post->ID);
			?>
			<a target="_blank" href="<?php echo get_field('external_link'); ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php //_e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
			
			
			
			<?php $query = new WP_Query( 'tag=block-1&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			if(get_field('upload_pdf')){
			?>
			<a href="<?php echo get_field('upload_pdf'); ?>" target="_blank" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}else{
			?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}
			?>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php //_e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
		<div class="small-12 medium-4 large-3 columns opDevice">
			<?php $query = new WP_Query( 'tag=block-2&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			if(get_field('upload_pdf')){
			?>
			<a href="<?php echo get_field('upload_pdf'); ?>" target="_blank" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover;background-position: 65%; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}else{
			?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover;background-position: 65%; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}
			?>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
		<div class="small-12 medium-4 large-3 columns opDevice">
			<?php $query = new WP_Query( 'tag=block-3&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			if(get_field('upload_pdf')){
			?>
			<a href="<?php echo get_field('upload_pdf'); ?>" target="_blank" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}else{
			?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}
			?>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="row homeGrid">
		<div class="small-12 medium-4 large-3 columns opDevice">
			<?php $query = new WP_Query( 'tag=block-4&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			if(get_field('upload_pdf')){
			?>
			<a href="<?php echo get_field('upload_pdf'); ?>" target="_blank" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}else{
			?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}
			?>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
		<div class="small-12 medium-4 large-3 columns opDevice">
			<?php $query = new WP_Query( 'tag=block-5&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			if(get_field('upload_pdf')){
			?>
			<a href="<?php echo get_field('upload_pdf'); ?>" target="_blank" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}else{
			?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}
			?>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
		<div class="small-12 medium-4 large-6 columns opDevice">
			<?php $query = new WP_Query( 'tag=block-6&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			if(get_field('upload_pdf')){
			?>
			<a href="<?php echo get_field('upload_pdf'); ?>" target="_blank" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}else{
			?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php
			}
			?>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
	</div>
		<div class="row homeGrid">
		<div class="small-12 medium-4 large-6 columns opDevice">
			<?php $query = new WP_Query( 'tag=block-7&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php endif; ?>
		</div>
		<div class="small-12 medium-4 large-3 columns opDevice">
			<?php $query = new WP_Query( 'tag=block-8&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover;background-position: 65%; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php endif; ?>
		</div>
		<div class="small-12 medium-4 large-3 columns opDevice">
			<?php $query = new WP_Query( 'tag=block-9&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="small-12" style="height:245px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				<div class="float-left masonery-title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			</a>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php endif; ?>
		</div>
	</div>
</div>