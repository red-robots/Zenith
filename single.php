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

					<div class="left-side-work">
						<h1><?php the_title(); ?></h1>
						<?php the_field('project_description'); ?>
					</div>

					<div class="right-side-work">
						<?php 

						$images = get_field('project_gallery');
						$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

						if( $images ): ?>
						    <ul>
						        <?php foreach( $images as $image ): ?>
						            <li>
						            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif; ?>
					</div>


		</main><!--main -->
	</div><!--primary -->
get_footer();
