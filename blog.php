<?php
/**
 * The template for displaying single posts and pages.
 *
 *  Template Name: Blog

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
				<h1> Blog</h1>
			</div>
		</div>
	</section>


	<div class="ababab">
		<?php 
		$args = array(
			'post_type'=> 'post',
			'orderby'    => 'ID',
			'post_status' => 'publish',
			'order'    => 'DESC',
			'posts_per_page' => -1 // this will retrive all the post that is published 
		);
		$result = new WP_Query( $args ); ?>


	</div>

	<section class="bloglist">
		<div class="container">
			<div class="blglist_box df fww">
				<?php $args = array(
					'post_type'=> 'post',
					'orderby'    => 'ID',
					'post_status' => 'publish',
					'order'    => 'DESC',
					'posts_per_page' => -1 // this will retrive all the post that is published 
				);
				$result = new WP_Query( $args );

				if ( $result-> have_posts() ) : ?>
					<?php while ( $result->have_posts() ) : $result->the_post(); ?>
						
						<div class="blog_listitem">
							<div class="blog_listitemin">
								<div class="bloglist_media pvr">
									<?php   
									/* grab the url for the full size featured image */
									$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
										 if ( has_post_thumbnail() ):
									?>
									<figure class="pvr">
										<a href="<?php echo esc_url($featured_img_url) ?>"><img src="<?php echo $featured_img_url ?>" class="objboximg" alt="">
										</a>
									</figure>
									<?php endif; ?>
									<div class="writerpic">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/writer.webp" alt="">
										<?php //echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
									</div>
								</div>
								<div class="bloglist_info">
									<?php the_title(sprintf('<h3><a href="%s">', esc_url(get_permalink())), '</a></h3>');?>
									<p class="authorname">by<strong> NERMIN HAJDARBEGOVIC</strong></p>
									<p><?php the_excerpt(); ?></p>									
									<div class="reading">
										<a class="blogread df fww" href="<?php echo esc_url(get_permalink()) ?>">Continue Reading<svg height="8px" viewBox="0 0 12 8" width="12px" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h11.253M8 .5L11.5 4 8 7.5" fill="transparent" fill-rule="nonzero" stroke="currentColor"></path></svg></a>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
				<?php endif; wp_reset_postdata(); ?>
				<?php /*<div class="blog_listitem">
					<div class="blog_listitemin">
						<div class="bloglist_media pvr">
							<figure class="pvr">
								<a href="#!"><img src="<?php echo get_template_directory_uri()?>/assets/images/bloglist.webp" class="objboximg" alt="">
								</a>
							</figure>
							<div class="writerpic">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/writer.webp" alt="">
							</div>
						</div>
						<div class="bloglist_info">

							<h3>
								<a href="#!">Remote Work Tools of the Remote Work Trade</a>
							</h3>
							<p class="authorname">by<strong> NERMIN HAJDARBEGOVIC</strong></p>
							<p>Working from home is no longer a business decision or a lifestyle choice. During the biggest public health crisis in a century, it’s a necessity: not to save time or money, but to save lives. In this article, Toptal Technical Editor Nermin Hajdarbegovic introduces newcomers to essential tools used by remote workers.</p>
							<div class="reading">
								<a class="blogread df fww" href="#!">Continue Reading<svg height="8px" viewBox="0 0 12 8" width="12px" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h11.253M8 .5L11.5 4 8 7.5" fill="transparent" fill-rule="nonzero" stroke="currentColor"></path></svg></a>
							</div>
						</div>
					</div>
				</div>

				<div class="blog_listitem">
					<div class="blog_listitemin">
						<div class="bloglist_media pvr">
							<figure class="pvr">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/bloglist.webp" class="objboximg" alt="">
							</figure>
							<div class="writerpic">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/writer.webp" alt="">
							</div>
						</div>
						<div class="bloglist_info">
							<h3>
								<a href="#!">Blockchain, IoT, and the Future of Transportation: Understanding the Motoro Coin</a>
							</h3>
							<p class="authorname">by<strong> NERMIN HAJDARBEGOVIC</strong></p>
							<p>Working from home is no longer a business decision or a lifestyle choice. During the biggest public health crisis in a century, it’s a necessity: not to save time or money, but to save lives. In this article, Toptal Technical Editor Nermin Hajdarbegovic introduces newcomers to essential tools used by remote workers.</p>
							<div class="reading">
								<a class="blogread df fww" href="#!">Continue Reading<svg height="8px" viewBox="0 0 12 8" width="12px" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h11.253M8 .5L11.5 4 8 7.5" fill="transparent" fill-rule="nonzero" stroke="currentColor"></path></svg></a>
							</div>
						</div>
					</div>
				</div>

				<div class="blog_listitem">
					<div class="blog_listitemin">
						<div class="bloglist_media pvr">
							<figure class="pvr">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/bloglist.webp" class="objboximg" alt="">
							</figure>
							<div class="writerpic">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/writer.webp" alt="">
							</div>
						</div>
						<div class="bloglist_info">
							<h3>
								<a href="#!">Remote Work Tools of the Remote Work Trade</a>
							</h3>
							<p class="authorname">by<strong> NERMIN HAJDARBEGOVIC</strong></p>
							<p>Working from home is no longer a business decision or a lifestyle choice. During the biggest public health crisis in a century, it’s a necessity: not to save time or money, but to save lives. In this article, Toptal Technical Editor Nermin Hajdarbegovic introduces newcomers to essential tools used by remote workers.</p>
							<div class="reading">
								<a class="blogread df fww" href="#!">Continue Reading<svg height="8px" viewBox="0 0 12 8" width="12px" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h11.253M8 .5L11.5 4 8 7.5" fill="transparent" fill-rule="nonzero" stroke="currentColor"></path></svg></a>
							</div>
						</div>
					</div>
				</div>		

				<div class="blog_listitem">
					<div class="blog_listitemin">
						<div class="bloglist_media pvr">
							<figure class="pvr">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/bloglist.webp" class="objboximg" alt="">
							</figure>
							<div class="writerpic">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/writer.webp" alt="">
							</div>
						</div>
						<div class="bloglist_info">
							<h3>
								<a href="#!">Remote Work Tools of the Remote Work Trade</a>
							</h3>
							<p class="authorname">by<strong> NERMIN HAJDARBEGOVIC</strong></p>
							<p>Working from home is no longer a business decision or a lifestyle choice. During the biggest public health crisis in a century, it’s a necessity: not to save time or money, but to save lives. In this article, Toptal Technical Editor Nermin Hajdarbegovic introduces newcomers to essential tools used by remote workers.</p>
							<div class="reading">
								<a class="blogread df fww" href="#!">Continue Reading<svg height="8px" viewBox="0 0 12 8" width="12px" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h11.253M8 .5L11.5 4 8 7.5" fill="transparent" fill-rule="nonzero" stroke="currentColor"></path></svg></a>
							</div>
						</div>
					</div>
				</div>

				<div class="blog_listitem">
					<div class="blog_listitemin">
						<div class="bloglist_media pvr">
							<figure class="pvr">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/bloglist.webp" class="objboximg" alt="">
							</figure>
							<div class="writerpic">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/writer.webp" alt="">
							</div>
						</div>
						<div class="bloglist_info">
							<h3>
								<a href="#!">Remote Work Tools of the Remote Work Trade</a>
							</h3>
							<p class="authorname">by<strong> NERMIN HAJDARBEGOVIC</strong></p>
							<p>Working from home is no longer a business decision or a lifestyle choice. During the biggest public health crisis in a century, it’s a necessity: not to save time or money, but to save lives. In this article, Toptal Technical Editor Nermin Hajdarbegovic introduces newcomers to essential tools used by remote workers.</p>
							<div class="reading">
								<a class="blogread df fww" href="#!">Continue Reading<svg height="8px" viewBox="0 0 12 8" width="12px" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h11.253M8 .5L11.5 4 8 7.5" fill="transparent" fill-rule="nonzero" stroke="currentColor"></path></svg></a>
							</div>
						</div>
					</div>
				</div>

				<div class="blog_listitem">
					<div class="blog_listitemin">
						<div class="bloglist_media pvr">
							<figure class="pvr">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/bloglist.webp" class="objboximg" alt="">
							</figure>
							<div class="writerpic">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/writer.webp" alt="">
							</div>
						</div>
						<div class="bloglist_info">
							<h3>
								<a href="#!">Remote Work Tools of the Remote Work Trade</a>
							</h3>
							<p class="authorname">by<strong> NERMIN HAJDARBEGOVIC</strong></p>
							<p>Working from home is no longer a business decision or a lifestyle choice. During the biggest public health crisis in a century, it’s a necessity: not to save time or money, but to save lives. In this article, Toptal Technical Editor Nermin Hajdarbegovic introduces newcomers to essential tools used by remote workers.</p>
							<div class="reading">
								<a class="blogread df fww" href="#!">Continue Reading<svg height="8px" viewBox="0 0 12 8" width="12px" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h11.253M8 .5L11.5 4 8 7.5" fill="transparent" fill-rule="nonzero" stroke="currentColor"></path></svg></a>
							</div>
						</div>
					</div>
					</div>		*/?>

				</div>
			</div>
		</section>


	</main><!-- #site-content -->

	<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

	<?php get_footer(); ?>
