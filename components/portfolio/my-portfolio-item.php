<?php
/**
 * The template for displaying the portfolio loop.
 *
 * @package York Lite
 * @author  Rich Tabor of ThemeBeans <hello@themebeans.com>
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 */

/**
 * Check if there's a secondary thumbnail uploaded. If so, we'll
 * add the '.project--has-second' class to the article.
 */
$size_class = get_post_meta( $post->ID, '_bean_portfolio_grid_size', true );

		 ?>

		<?php

		/*
		 * Let's check if there's an external url included on the back end.
		 * If there is, that will be assigned as the $portfolio_url variable, if not,
		 * the post permalink will be assigned.
		 */
		$external_url         = get_post_meta( $post->ID, '_bean_portfolio_external_url', true );
		$portfolio_url        = ( $external_url ) === true ? $external_url : get_the_permalink();
		$portfolio_url_class  = ( $external_url ) === true ? 'class=project-link project-link_external' : '';
		$portfolio_url_target = ( $external_url ) === true ? '_blank' : '_self';
        
        
        if($count % 3 == 0){
        $last = "last";
        }else{
        $last = "";
        }


echo '

   <div class="one_third '.$last.'">
            <div class="button-container">
            <a href="'.get_the_permalink().'" data-id="'.get_the_ID().'" >
            '.get_the_title().'
            </a>
              <img src="'.get_the_post_thumbnail_url().'"/>
            </div>
        </div>

';

$count = $count + 1;

?>



