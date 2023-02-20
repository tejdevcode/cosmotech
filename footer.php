<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer class="footerbox">

				<div class="container">
					<div class="footer_top df fww">
						<div class="footernav df fww">
							<div class=" ftnavone">
								<h5>Start a Project!</h5>
								<p>Projects big or small, we’re ready for your web development needs! Contact us today and talk to one of our experts.</p>
								<h6>OUR SERVICES</h6>
								<ul>
									<li><a href="#!">Magento</a></li>
									<li><a href="#!">Shopify</a></li>
									<li><a href="#!">Wordpress</a></li>
									<li><a href="#!">Joomla</a></li>
								</ul>
							</div>
							<div class=" ftnavtwo">
								<h5><?php echo wp_get_nav_menu_name('footer two');?></h5>
								<?php wp_nav_menu( array( 'theme_location' => 'footer two' , 'cpntainer' => '' , ));?>
							</div>
							<div class=" ftnavthree">
								<h5>Stop in & Say Hello!</h5>
								<ul class="ftrcontact">
									<li><a href="maillto:info@info.com">info@info.com</a></li>
									<li><a href="tel:+1123456789">+1 123456789</a></li>
								</ul>
								<div class="ftrsocial">
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

									<!-- <li>
										<a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
									</li> -->
									
									</ul>
								</div>
							</div>
						</div>
						<div class="footer_branding">
							<div class="footer_logo">
								<?php echo get_custom_logo(); ?>
								<div class="text-center meglogo"><img src="<?php echo get_template_directory_uri() ?>/assets/images/magento_certificate.png" alt="">
								</div>
							</div>
						</div>

					
					</div>
				</div>
				<div class="footer-copy">
					<div class="container">
						<div class="copybox  text-center">
							<p class="footer-copyright">&copy;
								<?php
								echo date_i18n(
									/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
									_x( 'Y', 'copyright date format', 'twentytwenty' )
								);
								?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								Solutions, all rights reserved.
							</p><!-- .footer-copyright -->

							
						</div>

					</div>
				</div><!-- .footer-credits -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
