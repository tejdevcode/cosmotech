<?php
/**
 * The template for displaying single posts and pages.
 *
 *  Template Name: Services

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

	<section class="pagetitle">
		<div class="container">
			<div class="titletxt text-center">
				<h1> <?php echo esc_html( get_the_title() ); ?></h1>
			</div>
		</div>
	</section>


	<section class="servicetop">
		<div class="container">
			<div class="sertop_box df fww">
				<div class="sertop_boxleft df fww">
					<div class="top_txt">
						<h2>Hire <span>Magento Developers</span></h2>
						<h6 class="titledisc">What you need to do is only describing desired features of the Magento website, we will help 
						you to build the store that ticks all the boxes!</h6>
					</div>
					<div class="sertop_media">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/we-are-in-office.svg" alt="">
						</figure>
					</div>
					<p>Building a Magento website is a long process with elaborate tasks. And if you don’t have enough resources for tailoring this giant structure, you can always get a professional and Magento-specified team to implement the plan.</p>
					<div class="sertop_btn">
						<a href="#!" class="btn">Talk to us now!</a>
					</div>
				</div>
				<div class="sertop_boxright">
					<div class="sertop_boxright_inner">
						<h2>Benefits for you</h2>
						<ul class="benefit_list">
							<li>
								
									<span class="benefit_media">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/sr1.png" alt="">
									</span>
									<h6 class="benifit_listtx">Pay-as-you-go</h6>
								
							</li>
							<li>
								
									<span class="benefit_media">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/sr2.png" alt="">
									</span>
									<h6 class="benifit_listtx">No commitment required</h6>
								
							</li>
							<li>
								
									<span class="benefit_media">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/sr3.png" alt="">
									</span>
									<h6 class="benifit_listtx"> Fast response</h6>
								
							</li>
							<li>
								
									<span class="benefit_media">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/sr4.png" alt="">
									</span>
									<h6 class="benifit_listtx">Security and IP Protection</h6>
								
							</li>
							<li>
								
									<span class="benefit_media">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/sr5.png" alt="">
									</span>
									<h6 class="benifit_listtx">Source Code Authorization</h6>
								
							</li>
							<li>
								
									<span class="benefit_media">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/sr6.png" alt="">
									</span>
									<h6 class="benifit_listtx">Strict NDA Terms</h6>
								
							</li>
							<li>
								
									<span class="benefit_media">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/sr7.png" alt="">
									</span>
									<h6 class="benifit_listtx">Seamless Communication</h6>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ourservices">
		<div class="container">
			<div class="top_txt">
				<h2>Best Magento Development <br>Services</h2>
			</div>
			<div class="ourservbox df fww">
				<div class="ourservice_item text-center">
					<div class="ourservice_iteminner df fww">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/serv1.svg" alt="">
						</figure>
						<h4>Custom Magento Web Development</h4>
					</div>
				</div>
				<div class="ourservice_item text-center">
					<div class="ourservice_iteminner df fww">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/serv2.svg" alt="">
						</figure>
						<h4>Magento Extension Development</h4>
					</div>
				</div>
				<div class="ourservice_item text-center">
					<div class="ourservice_iteminner df fww">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/serv3.svg" alt="">
						</figure>
						<h4>Responsive Magento Theme Development From PSD</h4>
					</div>
				</div>
				<div class="ourservice_item text-center">
					<div class="ourservice_iteminner df fww">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/serv4.svg" alt="">
						</figure>
						<h4>Upgrade to Magento 2</h4>
					</div>
				</div>
				<div class="ourservice_item text-center">
					<div class="ourservice_iteminner df fww">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/serv5.svg" alt="">
						</figure>
						<h4>Magento Customization Services</h4>
					</div>
				</div>
				<div class="ourservice_item text-center">
					<div class="ourservice_iteminner df fww">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/serv6.svg" alt="">
						</figure>
						<h4>Magento Module Development</h4>
					</div>
				</div>
				<div class="ourservice_item text-center">
					<div class="ourservice_iteminner df fww">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/serv7.svg" alt="">
						</figure>
						<h4>Magento migration and upgrade</h4>
					</div>
				</div>
				<div class="ourservice_item text-center">
					<div class="ourservice_iteminner df fww">
						<figure>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/serv8.svg" alt="">
						</figure>
						<h4>Payment And Shipping Integration</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="callaction">
		<div class="container">
			<div class="callactionin df fww just-between">
				<div class="ctadots">
					<div class="dotdot"></div>
					<div class="dotdot two"></div>
				</div>
				 <h2><span>Do you want help with Magento?</span>
				 Let’s work together to solve problems technically.</h2>
				 <div class="cta_Btn">
				 	<a href="#!" class="btn">Contact Us</a>
				 </div>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
