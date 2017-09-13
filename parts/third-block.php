		<div class="small-12 medium-9 large-9 columns">
			<?php get_template_part( 'parts/inner', 'loop' ); ?>
		</div>
	</div>
	<div class="row inner-page">
	<div class="small-12 columns">
			<?php if(get_field('headline')){  echo '<h5 class="text-center">' . get_field('headline') . '</h5>';}?>
			<?php if(get_field('contents')){  echo '<div class="third-align">'. get_field('contents') . '</div>' ;}?>
	</div>
	</div>