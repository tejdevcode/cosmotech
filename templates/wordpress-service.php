<?php
/**
 * The template for displaying single posts and pages.
 *
 *  Template Name: Wordpress Services

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">


<section class="servebnr">
	<div class="container">
		<div class="servbnr_box df fww">
			<div class="servbnrinfo">
				<p class="caps">CostmoTech Solutions offers a customized</p>
				<h1 class="caps">Wordpress Development and Maintenance</h1>
				<p>Most popular website builder. · Stand out with stylish themes and patterns · you can Build anything with WordPress</p>
			</div>
			<div class="servbnrmedia">
				<figure>
					<img src="<?php echo get_template_directory_uri()?>/assets/images/wordpress_service.png" alt="">
				</figure>
			</div>
		</div>
	</div>
</section>

<section class="wordservices">
	<div class="container containersm">
		<div class="top_txt text-center"> 
			<h2 class="titleLine">Wordpress Services </h2> 
		</div>
		<div class="wordservice_box grid">
			<div class="wordservice_col">
				<div class="wordservice_item text-center">
					<figure>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/elementor.png" alt="">
					</figure>
					<h4>Elementor Pro </h4>
					<p>Elementor is the leading website builder platform for  WordPress.</p>
				</div>
				<div class="wordservice_item text-center">
					<figure>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/bekryvc.png" alt="">
					</figure>
					<h4>Visual Composer And WPBakery </h4>
					<p>Visual Composer / bakery is a drag and drop website builder / page builder  that allows you to create professional websites.</p>
				</div>
			</div>
			<div class="wordservice_col">
				<div class="wordservice_itemwp text-center">
					<figure>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/wplogo.png" alt="">
					</figure>
				</div>
			</div>
			<div class="wordservice_col">
				<div class="wordservice_item text-center">
					<figure>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/ACF.png" alt="">
					</figure>
					<h4>ACF Pro</h4>
					<p>ACF Pro is most popular backend PHP tool to create dynemicly content wordpress website.</p>
				</div>
				<div class="wordservice_item text-center">
					<figure>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/woo.png" alt="">
					</figure>
					<h4>Woocommerce</h4>
					<p>WooCommerce is a customizable, open-source eCommerce platform built on WordPress.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cmsolutions pvr">
	<div class="cmsolutionsbg">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/wpmicroservicebg.jpg"  alt="" class="objimg">
	</div>
	<div class="container containersm">
		<div class="top_txt text-center">
			<div class="titletag">We offer great business solutions</div>
			<h2 class="titleLine">Wordpress CMS Development</h2>
			<p>WordPress is a popular open-source content management system (CMS). it has since become used for a wide variety of websites, including professional publications and e-commerce platforms.</p>
		</div>
		<div class="cmsolutioninfo grid">
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <img src="<?php echo get_template_directory_uri()?>/assets/images/PSD-to-WordPress.png"  alt="" class=""> </div>
				<div class="cmsolutiondetail">
					<h4>PSD Designs to Wordpress</h4> 
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fa-sharp fa-solid fa-shield-check"></i> </div>
				<div class="cmsolutiondetail">
					<h4>Security and Backup</h4> 
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="far fa-code"></i> </div>
				<div class="cmsolutiondetail">
					<h4> Custom Plugin Development</h4> 
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fas fa-wrench"></i> </div>
				<div class="cmsolutiondetail">
					<h4>Installation & Configuration</h4> 
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fa-solid fa-layer-group"></i> </div>
				<div class="cmsolutiondetail">
					<h4>Multisite Support </h4> 
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fa-solid fa-palette"></i> </div>
				<div class="cmsolutiondetail">
					<h4>Theme intigration and maintanance</h4> 
				</div>
			</div>
		</div>
	</div>
</section>

<section class="intouch">
		<div class="container containersm">
			<div class="intuch_info text-center">
				<h2 class="heading-size-1">Do you want to build website in wordpress?</h2>
				<p>Get a free quote as per your specific business needs.</p>
				<div class="intuch_btn">
					<a href="#!" class="btn ghostbtn whitebtn">GET A QUOTE</a>
				</div>
			</div>
		</div>
	</section>



</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
