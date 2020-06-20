<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Manulife
 */

get_header();
 

?>





 
<div class="breadcumarea">
	<div class="cotainer-fulid">
		<div class="container">
			<div class="row justify-content-lg-end">
				<div class="col-lg-7">
					<div class="breadcum-inner-content">
						<div class="breadcum-title"> 
								<h1>Our Blog</h1>  
						</div> 
						<div class="breadcum-custom-description">
							<p>We’re passionate about helping you curate a lifestyle that fits your unique needs, and creating financial solutions for every stage of life. We combine our services using an integrative approach to help you realize your financial dream.</p>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 

<!-- site page internal area start -->
<div class="site-page-internal-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="site-page-inner-content">
					<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(  ); ?>
			</div>
		</div>
	</div>
</div>
<!-- site page internal area end -->



<?php
 
get_footer();
