<?php
/**
 * The file for displaying the portfolio meta.
 *
 * @package York Lite
 * @author  Rich Tabor of ThemeBeans <hello@themebeans.com>
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="hero entry-header">


		<div class="entry-meta">


			<?php the_meta(); ?>

		</div>

	</header>

	<?php york_post_thumbnail(); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>
