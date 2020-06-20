<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Manulife
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	 

	 <!--start navigation area-->
    <header class="header_area" id="header_area">
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="site-logo header-logo">
						  <a class="navbar-brand logo_h" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Site Logo"></a>  
					</div>
				</div>
				<div class="col-lg-8">
					<div class="header-top-bar d-flex   justify-content-between">
						 <div class="info-box">
						 	<ul>
						 		<li><a href="mailto:info@manulifesecurities.ca"><i class="fa fa-envelope">info@manulifesecurities.ca</i></a></li> 
						 		<li><a href="tel:905-822-4488"><i class="fa fa-phone">905-822-4488</i></a></li> 
						 		<li><i class="fa fa-phone">905-822-4488</i>2360 Bristol Circle #100, Oakville, ON L6H 6M5</li> 
						 	</ul>
						 </div>
						 <div class="social-list">
						 	<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
						 	<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
						 	<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
						 	<a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a>
						 </div>
					</div>
					<div class="main_menu text-left">
			            <nav class="navbar navbar-expand-xl" data-spy="affix">
			                 
			                    <button class="navbar-toggler" type="button" data-toggle="collapse"
			                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			                        aria-expanded="false" aria-label="Toggle navigation">
			                        <span class="icon-bar"></span>
			                        <span class="icon-bar"></span>
			                        <span class="icon-bar"></span>
			                    </button>
			                    <!-- Collect the nav links, forms, and other content for toggling -->
			                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			                        <?php 
			                           


			                            wp_nav_menu( array(
										    'theme_location'  => 'menu-1',
										    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
										    'container'       => 'ul',
										    'container_class' => 'collapse navbar-collapse',
										    'container_id'    => 'bs-example-navbar-collapse-1',
										    'menu_class'      => 'nav navbar-nav menu_nav',
										    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
										    'walker'          => new WP_Bootstrap_Navwalker(),
										) );
			                        ?>



			                    </div>
			                
			            </nav>
			        </div>
				</div>
			</div>
		</div> 
    </header>
    <!--end navigation area-->
