<?php
/**
 * The template for displaying single posts and pages.
 *
 *  Template Name: Magento Services

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">


	

	<!-- <section class="pagetitle">
		<div class="container">
			<div class="titletxt text-center">
				<h1> <?php echo esc_html( get_the_title() ); ?></h1>
			</div>
		</div>
	</section> -->


<section class="servebnr">
	<div class="container">
		<div class="servbnr_box df fww">
			<div class="servbnrinfo">
				<p class="caps">CostmoTech Solutions offers a customized</p>
				<h1 class="caps">Magento Development and Maintenance </h1>
				<p>Services to ensure that your eCommerce store is performing its best.</p>
			</div>
			<div class="servbnrmedia">
				<figure>
					<img src="<?php echo get_template_directory_uri()?>/assets/images/magento_service.png" alt="">
				</figure>
			</div>
		</div>
	</div>
</section>

<section class="magservices">
	<div class="container containersm">
		<div class="magservicesbox df fww just-between">
			<div class="megservmedia">
				<figure>
					<img src="<?php echo get_template_directory_uri()?>/assets/images/magento_commarce.png" alt="">
				</figure>
			</div>
			<div class="megservinfo">
				<div class="top_txt">
					<h2 class="titleLine">Our Magento Micro Services</h2>
				</div>
				<ul>
					<li>Custom Magento Web Development </li>
					<li>Magento Migration </li>
					<li>Custom Magento Extension Development</li>
					<li> Magento Website Maintenance</li>
					<li> Payment Gateway Integration</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="cmsolutions pvr">
	<div class="cmsolutionsbg">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/whyUsbg.jpg"  alt="" class="objimg">
	</div>
	<div class="container containersm">
		<div class="top_txt text-center">
			<div class="titletag">We offer great business solutions</div>
			<h2 class="titleLine">Why choose Cosmotech Solutions</h2>
			<p>Here are just few resons like our Magento certified experts help you keep your Magento store running and up-to-date. We help you resolve your performance issuesand provide support for version upgrade, extension customization, security, API and ERP integration, payment integration, site speed and much more.</p>
		</div>
		<div class="cmsolutioninfo grid">
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fas fa-users"></i> </div>
				<div class="cmsolutiondetail">
					<h4> Magento certified team</h4>
					<p>We configure the out-of-the-box Magento.</p>
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fas fa-tachometer-alt"></i> </div>
				<div class="cmsolutiondetail">
					<h4>  Fast response</h4>
					<p>We automate effectively your back-office processes  with magento integration</p>
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="far fa-code"></i> </div>
				<div class="cmsolutiondetail">
					<h4> Source code authorization</h4>
					<p>We apply standard best practices in UX and UI design</p>
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fas fa-wrench"></i> </div>
				<div class="cmsolutiondetail">
					<h4>3+ years of average experience</h4>
					<p>We help you with Magento migration and upgrade</p>
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fas fa-headset"></i> </div>
				<div class="cmsolutiondetail">
					<h4>  Seamless communication </h4>
					<p>We integrate trusted third-party plugins.</p>
				</div>
			</div>
			<div class="cmsolution_item df fww">
				<div class="cmsolutionicon"> <i class="fas fa-book"></i> </div>
				<div class="cmsolutiondetail">
					<h4>  Strict NDA terms</h4>
					<p>We develop unique functionality extensions specifically as per  your business needs.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="intouch">
		<div class="container containersm">
			<div class="intuch_info text-center">
				<h2 class="heading-size-1">Do you want help with Magento?</h2>
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
