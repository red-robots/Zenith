<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=>'page',
		'name'=>'homepage'
	));

	if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) : $wp_query->the_post();

	    $mytext = get_field('banner_text');
	    $subtext = get_field('banner_subheading'); 
	    $image1 = get_field('image_1');
	    $image2 = get_field('image_2');
	    $image3 = get_field('image_3');
	    $projectimage = get_field('project_image');
   
?>


	<section class="banner">
		<header class="section-banner-text">
			<h2><?php echo $subtext; ?></h2>
			<h1><?php echo $mytext; ?></h1>
		</header><!-- banner text -->
	</section><!-- banner -->


	<a name="about"></a>
	<section class="about">
		<header class="section-header-white">
			<h3><?php the_field('about_us_subtext'); ?></h3>
			<h2><?php the_field('about_us_header'); ?></h2>
			<div class="spacer"></div>
		   	<p><?php the_field('about_us_text'); ?></p>
		   	<img class="our-story-image">
		   		<div class="us-images"> <!--custom post type "staff" -->
		   			<img src="<?php echo $image1['sizes']['medium']; ?>"/>
			   		<img src="<?php echo $image2['sizes']['medium']; ?>"/>
			   		<img src="<?php echo $image3['sizes']['medium']; ?>"/>
		   		</div><!--Images -->
		</header>   		
	</section><!-- About -->


	<a name="newsletter"></a>
	<section class="newsletter">
		<header class="section-header-blue">
				<h3><?php the_field('newsletter_subheader'); ?></h3>
		   		<h2><?php the_field('newsletter_header'); ?></h2>
			<p><?php the_field('newsletter_text'); ?></p>
		</header>
	</section><!-- Newsletter -->


	<a name="work"></a>
	<section class="work">
		<header class="section-header-white">
			<h3><?php the_field('our_work_subheader'); ?></h3>
			<h2><?php the_field('our_work_header'); ?></h2>
			<div class="spacer"></div>
		</header>
			<p><?php the_field('our_work_text'); ?></p>
		
	<div id="zenith-work">
		<?php $args=array(
			'post_type'=>'project', 
			'posts_per_page'=>9
			);
			$query=new WP_Query($args);
			if($query->have_posts()):
		?>
					<div class="our-work-project">
						<div id="zenith-projects">
							<?php while($query->have_posts()): $query->the_post();
							?>
								<div class="project">
									<h1><?php get_field('project_title');?></h1><img src="<?php echo $projectimage['sizes']['medium']; ?>"/><p><?php get_field('project_description');?></p>
								</div>
							<?php endwhile;?>
						</div> <!--container -->
					</div><!-- .entry-content -->
				<?php wp_reset_postdata();endif;?>
			</article><!-- #post-## -->

		</div><!-- project -->
		</section><!--Work -->


	<a name="contact"></a>
		<section class="contact">
			<header class="section-header-blue">
				<h3><?php the_field('contact_us_subheader'); ?></h3>
				<h2><?php the_field('contact_us_header'); ?></h2>
				<p><?php the_field('contact_us_text'); ?></p>
			</header>
		</section><!--Contact -->


	<?php endwhile; //endwhile for main loop
	endif; //endif for main loop
	?> 
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
