<div class="row" id="tbar">
	<div id="top-bar-menu" class="top-bar" >
			<div class="top-bar-left float-left show-for-small-only">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a data-toggle="off-canvas"><i class="fa fa-bars"></i><?php _e( '', 'jointswp' ); ?></a></li>
			</ul>
		</div>
		<a class="loginG" data-open="exampleModal1"></a>
		<div class="reveal" id="exampleModal1" data-reveal>
			<div class="golfbox-outer-p">
				<div class="golfbox-p">
					<hr>
					<form target="_blank" id="user-login-form" method="post" accept-charset="UTF-8" action="http://www.golfbox.dk/login.asp">
					<p><span class="wpcf7-form-control-wrap Brugernavn">


					<input type="text" class="form-text required wpcf7-form-control wpcf7-text" placeholder="Brugernavn" value="" size="40" id="edit-name" name="name" maxlength="60">
					<input type="hidden" value="form-Cbg9kCo7y0sx13TlPPIRbAlv9RbIcJpf5veaFZ3-R-w" id="form-Cbg9kCo7y0sx13TlPPIRbAlv9RbIcJpf5veaFZ3-R-w" name="form_build_id">
					<input type="hidden" value="user_login_block" id="edit-user-login-block" name="form_id">
					<input type="hidden" value="http://www.golfbox.dk/login.asp" id="edit-postUrl" name="postUrl">
					</span></p>
					<p><span class="wpcf7-form-control-wrap Password">
					<input type="password" class="form-text required wpcf7-form-control wpcf7-text" placeholder="Password" size="40" maxlength="60" id="edit-pass" name="pass">
					</span></p>
					<p class="lbtn">
					<input type="submit" class="form-submit ui-button ui-widget ui-state-default ui-corner-all wpcf7-form-control wpcf7-submit" onclick="GBvalidateLogin(event);" value="Log ind" id="edit-submit" name="op" role="button" aria-disabled="false">
					</p>
					</form>
				</div>
			</div>
				<button class="close-button" data-close aria-label="Close modal" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
		</div>

	    <div class="small-12 large-12 logo large-centered columns">
			<?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">		 
					<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">	 
				</a>
			 
				<?php else : ?>
						   
				<hgroup>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</hgroup>
						   
			<?php endif; ?>
		</div>
			<ul class="pllang" style="visibility: hidden;"><?php pll_the_languages(array('show_flags'=>2,'show_names'=>0)); ?></ul>

	</div>
</div>
<div class="menu-items">
	<div class="row">
			<div class="small-6 large-12 medium-12 top-bar-left float-left show-for-medium">
				<?php joints_top_nav(); ?>
			</div>
	</div>
</div>
