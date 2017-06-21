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
   
?>


<div class="banner">
	<div class="banner-text">
		<h3><?php echo $subtext; ?></h3>
		<h2><?php echo $mytext; ?></h2>
	</div><!-- banner text -->
</div><!-- banner -->


<div class="row2">
		<div class="Our-Story">
			<h3><?php the_field('about_us_subtext'); ?></h3>
	   		<h2><?php the_field('about_us_header'); ?></h2>
	   		<div class="spacer"></div>
	   		<p><?php the_field('about_us_text'); ?></p>
	   	<img class="Our-Story-Image">
	   		<div class="Us-Images">
	   			<img src="<?php echo $image1['sizes']['medium']; ?>"/>
		   		<img src="<?php echo $image2['sizes']['medium']; ?>"/>
		   		<img src="<?php echo $image3['sizes']['medium']; ?>"/>
	   		</div><!--Images -->
	   	</div> <!--Our-Story -->
</div><!-- row2 -->

<div class="row3">
	<div class="Newsletter">
			<h3><?php the_field('newsletter_subheader'); ?></h3>
	   		<h2><?php the_field('newsletter_header'); ?></h2>
	   		<p><?php the_field('newsletter_text'); ?></p>
	</div><!--Newsletter -->
</div><!-- row3 -->


<div class="row4">
	<div class="Our-Services">
			<h3><?php the_field('our_services_subheader'); ?></h3>
	   		<h2><?php the_field('our_serviced_header'); ?></h2>
	   		<div class="spacer"></div>
	   		<p><?php the_field('our_services_text'); ?></p>

	   		<div class="zenith-services">
	   		<!--custom post type -->
		</div><!-- Zenith-Services -->
	</div><!-- Our-Services -->
</div><!-- row4 -->


<div class ="row5">
	<div class="Our-Work">
		<h3><?php the_field('our_work_subheader'); ?></h3>
		<h2><?php the_field('our_work_header'); ?></h2>
		<div class="spacer"></div>
		<p><?php the_field('our_work_text'); ?></p>
	</div><!-- Our-Work -->
</div><!-- row5 -->


<div class="row6">
	<div class="Contact-Us">
		<h3><?php the_field('contact_us_subheader'); ?></h3>
		<h2><?php the_field('contact_us_header'); ?></h2>
		<p><?php the_field('contact_us_text'); ?></p>
	</div><!--Contact-Us -->
</div><!--row6 -->


	<?php endwhile; //endwhile for main loop
	endif; //endif for main loop?> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
