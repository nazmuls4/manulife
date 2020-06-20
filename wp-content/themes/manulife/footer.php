<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Manulife
 */

?>

<div class="footer-area">
	<!-- header top area start -->
	<div class="header-top-area position-relative pt-100 pb-60">
		<div class="container">
			<div class="row justify-content-lg-between">
				<div class="col-lg-5">
					<div class="site-lgo site-footer-logo">
						 <a class="navbar-brand logo_h" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Site Logo"></a>  
					</div>
				</div> 
				<div class="col-lg-5">
				 <?php echo do_shortcode( '[contact-form-7 id="15" title="Footer subscriber"]' ); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- header top area end -->
	<!-- footer widget area start -->
	<div class="footer-widget-area position-relative pt-60 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-about-detail">
						<h3 class="footer-title mb-40">About Us</h3> 
						<div class="about-desccription">
							<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
						</div>

					</div>
					<div class="opening-our d-flex align-items-start">
						<div class="open-clock">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cclock.png" alt="">
						</div>
						<div class="opening-time-detail">
							<h4>Opening Hours</h4>
							<ul>
								<li>Mon - Sat 8:00 - 17:30,</li>
								<li>Sunday - CLOSED</li> 
							</ul>
						</div>
					</div>
				</div>
				<?php  dynamic_sidebar( 'footer-sidebar' ); ?>

				<div class="col-lg-3">
					<div class="footer-location">
						<h3 class="footer-title mb-40">Our Location</h3>
						<ul>
							<li>2360 Bristol Circle #100, <br> Oakville, ON L6H 6M5</li>
							<li><a href="tel:905-822-4488">Office: 905-822-4488</a></li> 

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer widget area end -->
	<!-- footer copyright area start -->
	<div class="footer-copyright-area pt-40 pv-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="copyright-text">
						<p>© Copyright Confido Wealth Management - 2020</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer copyright area end -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
