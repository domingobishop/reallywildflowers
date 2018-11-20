</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
			<?php
			/* footer sidebar */
			if ( ! is_404() ) : ?>
				<div id="footer-widgets" class="four">
					<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-6' ); ?>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-7' ); ?>
					<?php endif; ?>
				</div><!-- #footer-widgets -->
		<?php endif; ?>
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			&copy;2014. All rights reserved. |	
			<a href = "http://www.reallywildflowers.co.uk/accessibility-statement/" accesskey="0" title="Help using this website [Alt+0]">Accessibility Statement</a> |	
			<a href = "http://www.reallywildflowers.co.uk/terms-conditions/" accesskey="8" title="Terms &amp; Conditions of use [Alt+8]">Terms &amp; Conditions</a> |	
			<a href = "http://www.reallywildflowers.co.uk/privacy-policy/">Privacy Policy</a> |
			<a href = "http://www.reallywildflowers.co.uk/about/contact-us/" accesskey="9" title="Get in touch [Alt+9]">Contact Us</a> |	
			<a href = "http://www.reallywildflowers.co.uk/credits/">Credits</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?></body></html>