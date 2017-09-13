<h4><?php the_title(); ?></h4>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<?php wp_nav_menu( array( 'menu' => 'Min Klubs' ) ); ?>
</article>