<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
		
	<div class="footer">
		<div class="social-icons-footer">
				<?php $facebook_link = get_field("facebook_link","option");
				$linkedin_link = get_field("linkedin_link","option");
				if($facebook_link):?>
					<span class="fa-stack fa-lg">
						<a href="<?php echo $facebook_link;?>"><i class="fa fa-circle fa-stack-2x"></i></a>
						<a href="<?php echo $facebook_link;?>"><i class="fa fa-facebook fa-stack-1x"></i></a>
					</span>
				<?php endif;
				if($linkedin_link):?>
					<span class="fa-stack fa-lg">
						<a href="<?php echo $linkedin_link;?>"><i class="fa fa-circle fa-stack-2x"></i></a>
						<a href="<?php echo $linkedin_link;?>"><i class="fa fa-linkedin fa-stack-1x"></i></a>
					</span>
				<?php endif;?>
		</div><!--social-icons-footer -->
		
		<h4><?php the_field('footer_text',"option"); ?></h4>
	</div><!--footer -->

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
