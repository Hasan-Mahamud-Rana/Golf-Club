            <?php if($post->post_parent) 
                { 
                    $permalink = get_permalink($post->post_parent);
                    $parent_title = get_the_title($post->post_parent);  
            ?>
            <h5><a href="<?php echo $permalink; ?>"><?php echo $parent_title;?></a></h5>
            <?php } ?>  
<h4><?php the_title(); ?></h4>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
    <ul class="wp-tag-cloud">
        <?php
        $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $post->ID,
        'order'          => 'ASC'
        );
        $parent = new WP_Query( $args );
        if ( $parent->have_posts() ) : ?>
        <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
        <div id="parent-<?php the_ID(); ?>" class="parent-page">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><li><?php the_title(); ?></li></a>
        </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
    </ul>
</article>