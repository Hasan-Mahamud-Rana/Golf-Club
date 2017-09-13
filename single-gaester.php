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


			<a href="<?php echo get_page_link(246); ?>"><h5>Gæster</h5></a>
			<?php //$parent_ID = wp_get_post_parent_id($post);
			if($post->post_parent)
				{
					$permalink = get_permalink($post->post_parent);
					$parent_title = get_the_title($post->post_parent);
			?>
			<a href="<?php echo $permalink; ?>"><h4><?php echo $parent_title;?></h4></a>
			<?php }?>
			<?php if($post->post_parent==0) {?>
			<a href="#"><h4><?php the_title(); ?></h4></a>
			<?php }?>
			<ul class="wp-tag-cloud">
			<?php

			wp_list_pages('sort_column=menu_order&title_li=&depth=0&post_type=gaester&echo=-1');
?>
			</ul>
		</div>
	<?php get_template_part( 'parts/third', 'block' ); ?>
	</div>
<?php get_footer(); ?>