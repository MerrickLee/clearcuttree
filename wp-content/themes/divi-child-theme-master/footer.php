<!--
 * This Divi child theme file modifies Divi Theme v2.3.1 footer links starting at line 45 below.
 * Author:   David Tierney http://designsbytierney.com
 * Creation date March 5, 2015
-->

    <?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div style="width:90%; text-align:center;margin:0 auto;padding: 20px 10px 40px 10px;"><a href="/finance/"><img src="/wp-content/uploads/2018/03/clear-cut-tree-financing.png"></a>
						
					</div>
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

						<p id="footer-info">Copyright &copy; <?php echo date("Y") ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>


<script>
	if(document.getElementById('et-info-email')){

		document.getElementById('et-info-email').onclick = function(){EmailFunction()};

			function EmailFunction(){

		    ga('send', 'event', 'Contact', 'Click', 'Email Click');

		};

	}


		if(document.getElementById('et-info-phone')){

		document.getElementById('et-info-phone').onclick = function(){PhoneFunction()};

			function PhoneFunction(){

			document.getElementById('et-info-phone').innerHTML = "203-601-7966";

		    ga('send', 'event', 'Contact', 'Click', 'Phone Click');

		};

	}

		if(document.getElementById('form-submit')){

		document.getElementById('form-submit').onclick = function(){ContactFormFunction()};

			function ContactFormFunction(){

		    ga('send', 'event', 'Contact', 'Click', 'Contact From Submit');

		};

	}


</script>
</body>
</html>
