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
				
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-facebook fa-stack-1x"></i>
				</span>
					
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-linkedin fa-stack-1x"></i>
				</span>

		</div><!--social-icons-footer -->
		
		<h3><?php the_field('footer_text'); ?></h3>
	</div><!--footer -->

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
