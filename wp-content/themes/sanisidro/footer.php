<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sanisidro
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div id="footer-nav">
			<?php
				wp_nav_menu(
					array(
						'menu' => 'Footer',
						'theme_location' => 'menu-5',
						'menu_id'        => 'footer-menu',
					)
				);
				?>
			</div>
			<div id="footer-socials">
			<ul>
				<li><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/img/facebook.png"/></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/img/twitter.png""/></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/img/youtube.png""/></a></li>
			</ul>
			</div>
		</div><!-- .site-info -->
		<div class="copyright">
			Copyright© 2023. ALRIGHTS RESERVED | DEVELOPED BY DORSU-BEC
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
