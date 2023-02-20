<?php
/**
 * The template for displaying single posts and pages.
 *
 *  Template Name: Contact Us

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php /*if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	*/ ?>

<!-- 	<section class="pagetitle">
		<div class="container">
			<div class="titletxt text-center">
				<h1> <?php echo esc_html( get_the_title() ); ?></h1>
			</div>
		</div>
	</section> -->

	<section class="contactus pvr">
		<div class="contactusbg">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/global.jpeg"  alt="" class="objimg global">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/worldmap.png"  alt="" class="objimg globalmap">
		</div>
		<div class="container containersm">
			<div class="contactusbox text-center">
				<h1 class="w100">Get In Touch</h1>
				
				<ul class="contcatinfo w100">
					<li><a href="tel:+11234567891"><i class="fa-solid fa-mobile-button"></i> Phone:  +1 12345 67891</a></li>
					<li><a href="mailto:hello@cosmotechsolutions.com"><i class="fa-solid fa-envelope"></i> Email : hello@cosmotechsolutions.com</a></li>
					<li><a href="#!"> <i class="fa-solid fa-location-dot"></i> Address : Near ClubO7 Road ,Shela ,  Ahmedabad  , Gujarat , India</a></li>
				</ul>

				<div class="contactsocial w100">
					<ul class="social-links df fww">
						<li>
							<a href="https://www.linkedin.com/" target="_blank" title="Linked In"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
						</li> 
					</ul>
				</div>
				<div class="contctusform">
					<p>If you require, we have a Non-disclosure Agreement available to easily discuss your idea.</p>
					<?php echo do_shortcode( '[contact-form-7 id="50" title="Contact form"]' ); ?>
				</div>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
