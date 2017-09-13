<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="articleBody">
		<!--<a href="<?php //the_permalink() ?>"><?php //the_post_thumbnail('full'); ?></a>-->
		<?php 
		$excerpt= get_the_excerpt();

		echo substr($excerpt, 0, 300)."...";
		//the_content(); ?>
		<br><a href="<?php the_permalink() ?>">Læs mere</a>
 	</section> <!-- end article section -->

	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
</article> <!-- end article -->
<div class="hline"></div>