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
	$post = get_post(38);
	if ($post) :  setup_postdata($post);

	    $mytext = get_field('banner_text');
	    $subtext = get_field('banner_subheading'); 
	    $bannerimage = get_field('banner_image');
   
?>


	<section class="banner">
		<div class="banner-image">
			<img src="<?php echo $bannerimage['url']; ?>"/>
		</div>
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

		   	<div id="zenith-about">
			<?php $args=array(
				'post_type'=>'aboutphoto', 
				'posts_per_page'=>-1
				);
				$query=new WP_Query($args);
				if($query->have_posts()):

				
			?>
			<div class="about-us-photo">
				<div id="zenith-photos">
					<?php while($query->have_posts()): $query->the_post();
					$zenithphoto = the_field('about_us_photo');
					?>
						<div class="about-zenith-photo">
							<img src="<?php echo $zenithphoto['sizes']['medium']; ?>"/>
						</div>
					<?php endwhile;?>
					<div class="clear"></div>
				</div><!--about-us-photo -->
			</div><!--zenith-photos -->
			<?php wp_reset_postdata();endif;?>
		</header>   		
	</section><!-- About -->


	<a name="news"></a>
	<section class="news">
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
				'posts_per_page'=>-1
				);
				$query=new WP_Query($args);
				if($query->have_posts()):

				
			?>
			<div class="our-work-project">
				<div id="zenith-projects">
					<?php while($query->have_posts()): $query->the_post();
					$projectimage = get_field('project_image');
					?>
						<div class="project">
							<a href="<?php echo get_the_permalink(); ?>">
								<h1><?php the_title();?></h1>
								<img src="<?php echo $projectimage['sizes']['medium']; ?>"/>
							</a>
						</div>
					<?php endwhile;?>
					<div class="clear"></div>
				</div> <!--zenith-projects -->
			</div><!-- our-work-projects -->
		<?php wp_reset_postdata();endif;?>

		</div><!-- zenith-work -->
	</section><!--Work -->


	<a name="contact"></a>
		<section class="contact">
			<header class="section-header-blue">
				<h3><?php the_field('contact_us_subheader'); ?></h3>
				<h2><?php the_field('contact_us_header'); ?></h2>
				<p><?php the_field('contact_us_text'); ?></p>
				<div class="contact-content">
					<?php the_field('contact_us_text_1'); ?>
					<?php the_field('contact_us_text_2'); ?>
				</div>
			</header>
		</section><!--Contact -->


	<?php endif; //endif for main loop
	?> 
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
