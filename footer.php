<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #page div and all content after
 *
 * @package York Lite
 * @author  Rich Tabor of ThemeBeans <hello@themebeans.com>
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 */

?>

		</div><!-- .site-content -->

		<?php get_sidebar(); ?>

		<footer id="colophon" class="site-footer">

			<?php if ( is_active_sidebar( 'footer' ) ) : ?>
				<div class="footer-sidebar widget-area">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
			<?php endif; ?>

			<?php york_social_navigation(); ?>

			<div class="site-info">

                <span class="site-title">
<br>
				</span>

				<span class="site-theme">
                    <?php /* translators: 1: theme, 2: designer */ ?>
				</span>

			</div>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav id="footer-navigation" class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'york-lite' ); ?>">
					<?php wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_class'     => 'footer-menu',
						'depth'          => '1',
					) ); ?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

		</footer><!-- .site-footer -->

	</div><!-- .site -->

	<?php wp_footer(); ?>

	</body>

</html>
