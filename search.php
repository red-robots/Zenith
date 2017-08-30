<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ACStarter
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main template-page" role="main">
			<div class="zenith-projects-work">
				<div class="left-side-work">
					<h1>Search</h1>
					<div class="copy">
						<p>Your search results:</p>
						<?php if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();?>
								<h2><a href="<?php echo get_the_permalink();?>"><?php echo the_title();?></a></h2>
							<?php endwhile;
						else:?> 
							<p>Nothing matched your search! Please try again.</p>
						<?php endif; ?>
					</div>
				</div>
			
				<div class="right-side-work">
					<?php 
					$post = get_post(322);
					if($post):
						setup_postdata($post);
						$images = get_field('image_gallery');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
						$sizeL = 'large';

						if( $images ): ?>

							<div id="container" class="images-cont">
								<?php foreach( $images as $image ): 
								?>
									
									<div class="images item">
										<a class="gallery" href="<?php echo $image['url']; ?>" >
											<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt'];?>">
										</a>
									</div>
									
								<?php endforeach; ?>
							</div>

						<?php endif; 
						wp_reset_postdata();
					endif;?>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
