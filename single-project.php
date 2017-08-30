<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

	
				 // If comments are open or we have at least one comment, load up the comment template.
				 if ( comments_open() || get_comments_number() ) :
					comments_template();

				endif;
			endwhile; // End of the loop.
			?>


				<div class="zenith-projects-work">
					<div class="left-side-work">
						<h1><?php the_title(); ?></h1>
							<h2><?php the_field('project_location') ?></h2>
							<div class="single-nav-right">
								<?php next_post_link( '%link','Previous' ); ?>
							</div>
							<div class="single-nav-left">
								<?php previous_post_link('%link','Next'); ?>
							</div>
							<?php the_field('project_description'); ?>
					</div>
				
					<div class="right-side-work">
						<div class="single-nav-left">
							<?php previous_post_link('%link','Next'); ?>
						</div>
						<?php 

						$images = get_field('image_gallery');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
						$sizeL = 'large';

						if( $images ): ?>

						    <div class="images-cont">
						        <?php foreach( $images as $image ): 
						        ?>
						            
						            <div class="images">
						            	<a class="gallery" href="<?php echo $image['url']; ?>" >
						            		<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						            	</a>
						            </div>
						            
						        <?php endforeach; ?>
						    </div>

						<?php endif; ?>
					</div>
				</div>

		</main><!--main -->
	</div><!--primary -->
<?php get_footer(); ?>
