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

       $tags = get_the_terms( $post->ID, 'portfolio_category' )[0]->name; 
        $banner = '<div class="banner">';
        if(strlen($tags)>10){
        foreach(explode(" ", $tags) as $word){
        $banner .= '<div class="line"> <span>'.strtoupper($word).'</span></div>';
        
        }        
        }else{
          $split = explode(" ", $tags);
         $banner .= '<div class="line"><span style="font-weight:300">'.strtoupper($split[0])."</span> <span>".strtoupper($split[1])."</span></div>";
        }
        $banner .= "</div>";
        echo '

 <div class="centered" style="background-image: url(\''.get_the_post_thumbnail_url().'\')">
            <a href="'.get_the_permalink().'" data-id="'.get_the_ID().'" >        
                <img width="100%" id="hide" src="'.get_the_post_thumbnail_url().'"/>
                <div id="project" class="center-header">
                </div>
               '.$banner.' 
            </a>
         </div>
              ';
     //   echo do_shortcode('[maxbutton id="1" text="'.$name.'" url="https://roberthosking.com/portfolio/'.$name.'"]');

?>



