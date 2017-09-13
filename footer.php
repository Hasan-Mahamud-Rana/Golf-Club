<footer class="footer" role="contentinfo">
	<div id="inner-footer" class="row homeGrid">
		<?php dynamic_sidebar('footer-address' ); ?>
		<?php dynamic_sidebar('footer-editors'); ?>
		<?php dynamic_sidebar('footer-newsletter'); ?>
		<?php dynamic_sidebar('footer-miscellaneous'); ?>
	</div>
</footer>
<div class="authority">
	<div id="inner-footer" class="row">
		<div class="small-12 columns copyright">
			<a href="http://graphichouse.dk/">Graphichouse.dk</a>
		</div>
	</div>
</div>
</div> <!-- end .off-canvas-wrapper-inner -->
</div> <!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
		<script type="text/javascript">
	  
		jQuery('.sponsorS').slick({
			dots: false,
			infinite: true,
			speed: 800,
			slidesToShow: 3,
			autoplay: true,
			fade: false,
			adaptiveHeight: true,
			initialSlide: Math.floor(Math.random() * 11)
		});

		jQuery('.slide').slick({
			dots: true,
			infinite: true,
			speed: 800,
			autoplay: true,
			slidesToShow: 1,
			fade: true,
			cssEase: 'linear',
			adaptiveHeight: true
		});
		jQuery('.slideHeadline').slick({
			infinite: true,
			adaptiveHeight: true,
			arrows: false,
			speed: 3000,
			autoplay: true,
			autoplaySpeed: 5000,
			cssEase: 'ease',
			easing: 'linear',
			slidesToShow: 1,
			slidesToScroll: -1
		});
		jQuery(".slide, .slideHeadline").addClass("tricky");
		/*Responsvie double click*/
		//jQuery( '#off-canvas li:has(ul)' ).doubleTapToGo();
		</script>
	</body>
</html>