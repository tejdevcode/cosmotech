<?php
/**
 * The template for displaying single posts and pages.
 *
 *  Template Name: Home

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

	<section class="banner pvr">
		<div class="bnr_bg "><img src="<?php echo get_template_directory_uri();?>/assets/images/herobanner.jpg" class="objimg" alt=""></div>
		<div class="container">
			<div class="bnr_info df fww">
				<div class="bnr_leftinfo">
					<p class="caps">WEB DEVELOPMENT Services</p>
					<h1 class="caps">WE BUILD PRECISE Web SOLUTIONS and Delivers Like Your Dream  Team Would</h1>
					<p>Accelerate your web development efforts flexible and cost-efficiently</p>
					<div class="bnr_btn">
						<a href="#!" class="btn">SERVICES</a>
					</div>
				</div>
				<div class="bnr_rightinfo">
					<h3 class="caps">Hire Top WEB Developers</h3>
					<div class="bnr_form">
						<?php echo do_shortcode( '[contact-form-7 id="50" title="Contact form"]' ); ?>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="homeservice">
		<div class="container">
			<div class="top_txt text-center">
				<div class="titletag">Services</div>
				<h2 class="titleLine">Our Technology Expertise</h2>
			</div>
			<div class="homesevice_box grid text-center">
				<div class="hmserviceitem">
					<a href="#!">
						<figure><img src="<?php echo get_template_directory_uri();?>/assets/images/logomagento.png" alt=""></figure>
						<h5>Magento</h5>
					</a>
				</div>
				<div class="hmserviceitem">
					<a href="#!">
						<figure><img src="<?php echo get_template_directory_uri();?>/assets/images/logoshopify.jpg" alt=""></figure>
						<h5>Shopify</h5>
					</a>
				</div>
				<div class="hmserviceitem">
					<a href="#!">
						<figure><img src="<?php echo get_template_directory_uri();?>/assets/images/logowordpress.png" alt=""></figure>
						<h5>Wordpress</h5>
					</a>
				</div>
				<div class="hmserviceitem">
					<a href="#!">
						<figure><img src="<?php echo get_template_directory_uri();?>/assets/images/joomla.jpg" alt=""></figure>
						<h5>Joomla</h5>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ecommerserve">
		<div class="container containersm">
			<div class="ecommerserve_box df fww just-between">
				<div class="ecs_left">
					<div class="top_txt">
						<h2 class="titleLine">Ecommerce development services</h2>
					</div>
					<p>CosmoTech Solutions offers complete eCommerce website solutions for scalable, secure and superior online stores that stand the test of time.</p>
				</div>
				<div class="ecs_right">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/ecommercehome.jpg" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="testimonial pvr">
		<div class="testibg ">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/testibg.jpg" alt="" class="objimg">
		</div>
		<div class="container containersm">
			<div class="top_txt text-center">
				<div class="titletag">Testimonials</div>
				<h2 class="titleLine">Our Development Successes</h2>
			</div>
			<div class="testimonail_info">
				<div class="testimonial_item">
					<div class="testim_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="testim_person df fww just-between">
						<div class="tetipersoninfo">
							<h5>John Deo </h5>
							<p><small>Chief Business Officer, TAIT</small></p>
						</div>
						<div class="postside_line"></div>
					</div>
				</div>
				<div class="testimonial_item">
					<div class="testim_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="testim_person df fww just-between">
						<div class="tetipersoninfo">
							<h5>John Deo </h5>
							<p><small>Chief Business Officer, TAIT</small></p>
						</div>
						<div class="postside_line"></div>
					</div>
				</div>
				<div class="testimonial_item">
					<div class="testim_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="testim_person df fww just-between">
						<div class="tetipersoninfo">
							<h5>John Deo </h5>
							<p><small>Chief Business Officer, TAIT</small></p>
						</div>
						<div class="postside_line"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="intouch">
		<div class="container containersm">
			<div class="intuch_info text-center">
				<h2 class="heading-size-1">Ready to move faster with the Top Web Talent?</h2>
				<p>Would you like to discuss how cosmotech can help with your web development needs? Drop us a line, we’ll get back to you with more info on our services.</p>
				<div class="intuch_btn">
					<a href="#!" class="btn ghostbtn whitebtn">GET IN TOUCH</a>
				</div>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
