<main id="main" role="main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<section class="entry-content" itemprop="articleBody">
		<h6><?php if ( ! has_excerpt() ) {echo the_title('<h3>','</h3>');} else { the_excerpt();} ?></h6>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</section>
</article>
<?php endwhile; endif; ?>
</main>