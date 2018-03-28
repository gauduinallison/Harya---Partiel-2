<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package harya
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<section id="prefooter" class="grid-container full">
			<div class="grid-x">
				<div class="cell large-12 nav">
					<nav id="site-navigation-footer" class="main-navigation cell large-12">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'		 => 'menu align-center',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</section>
		<section id="footer" class="grid-container full">
			<div class="grid-x">
				<div class="cell large-11 text-left">
					<p>©Copyright Harÿa - Tous droits réservés</p>
				</div>
				<div class="cell large-1 text-right social">
					<nav>
					  <?php
					  echo '<ul class="menu">';
					          if ( of_get_option('instagram_link') ) {
					            echo '<li><a href="'.of_get_option('instagram_link').'"><i class="fab fa-instagram"></i></a></li>';
					          }
					          if ( of_get_option('pinterest_link') ) {
					            echo '<li><a href="'.of_get_option('pinterest_link').'"><i class="fab fa-pinterest-p"></i></a></li>';
					          }
					  echo '</ul>';
					  ?>
					</nav>
				</div>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
