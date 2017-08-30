<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main template-page" role="main">
			<div class="zenith-projects-work">
				<div class="left-side-work">
					<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
					<div class="copy">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try  a search?', 'acstarter' ); ?></p>
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
	</div><!-- #primary -->

<?php
get_footer();
