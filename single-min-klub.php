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


			<a href="<?php echo get_page_link(383); ?>"><h5>Min Klub</h5></a>
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
			<?php
			$current_id = get_the_ID();
			?>
			<ul class="wp-tag-cloud">
			<?php
            if($post->post_parent==0){
			//$children =wp_list_pages('sort_column=menu_order&title_li=&child_of='.get_the_ID().'&post_type=min-klub&echo=-1');
			$args = array(
				'sort_order' => 'ASC',
				'sort_column' => 'menu_order',
				'hierarchical' => 1,
				'exclude' => '',
				'child_of' => get_the_ID(),
				'parent' => -1,
				'exclude_tree' => '',
				'number' => '',
				'offset' => 0,
				'post_type' => 'min-klub',
				'post_status' => 'publish'
				);
				$pages = get_pages($args);
				foreach($pages as $page){
					echo '<a href="'.get_page_link( $page->ID ).'">';
						if ($current_id == $page->ID){
							echo '<li class="current_page_item">'.$page->post_title.'</li></a>';
						}
						else{
							echo '<li>'.$page->post_title.'</li></a>';
						}
					}
			}
			else{
			//wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->post_parent.'&post_type=min-klub&echo=-1');

			$args = array(
				'sort_order' => 'ASC',
				'sort_column' => 'menu_order',
				'hierarchical' => 1,
				'exclude' => '',
				'child_of' => $post->post_parent,
				'parent' => -1,
				'exclude_tree' => '',
				'number' => '',
				'offset' => 0,
				'post_type' => 'min-klub',
				'post_status' => 'publish'
				);
				$pages = get_pages($args);
				foreach($pages as $page){
					echo '<a href="'.get_page_link( $page->ID ).'">';
					if ($current_id == $page->ID){
						echo '<li class="current_page_item">'.$page->post_title.'</li></a>';
					}
					else{
						echo '<li>'.$page->post_title.'</li></a>';
					}
				}

			}
 ?>
			</ul>
		</div>
	<?php get_template_part( 'parts/third', 'block' ); ?>
	</div>
<?php get_footer(); ?>