<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Manulife
 */

get_header();


if (get_post_meta( get_the_ID(), 'manulife_page_option', true )) {
	$page_meta = get_post_meta( get_the_ID(), 'manulife_page_option', true );
}else{
	$page_meta = array();
}

if (array_key_exists('enable_breadcum', $page_meta)) {
	$enable_breadcum = $page_meta['enable_breadcum'];
}else{
	$enable_breadcum = false; 
}

if (array_key_exists('custom_page_title', $page_meta)) {
	$custom_page_title = $page_meta['custom_page_title'];
}else{
	$custom_page_title = ''; 
}
 
  
if (array_key_exists('breadcum_description', $page_meta)) {
	$breadcum_description = $page_meta['breadcum_description'];
}else{
	$breadcum_description = 'We’re passionate about helping you curate a lifestyle that fits your unique needs, and creating financial solutions for every stage of life. We combine our services using an integrative approach to help you realize your financial dream.'; 
}
  

while ( have_posts() ) :
?>

<?php if ($enable_breadcum == true): ?>
<div class="breadcumarea position-relative">
	<?php if (has_post_thumbnail(  )): ?>
		<div class="breadcum-feature-image">
			<img src="<?php echo the_post_thumbnail_url() ; ?>" alt="breadcum iamge"> 
		</div>
	<?php endif; ?>
	<div class="cotainer-fulid">
		<div class="container">
			<div class="row justify-content-lg-end">
				<div class="col-lg-7">
					<div class="breadcum-inner-content">
						<div class="breadcum-title">
							<?php if (!empty($custom_page_title)): ?>
								<h1><?php echo esc_attr( $custom_page_title ); ?></h1>
								<?php else: ?>
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<?php endif ;?>

							

						</div>
						<?php if (!empty($breadcum_description)): ?>
							<div class="breadcum-custom-description">
								<p><?php echo esc_attr( $breadcum_description ); ?></p>
							</div>
						<?php endif ;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<!-- site page internal area start -->
<div class="site-page-internal-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="site-page-inner-content">
					<?php
						
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						 
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- site page internal area end -->

<?php
endwhile;
get_footer();
