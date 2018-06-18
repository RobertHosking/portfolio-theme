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
         $banner .= '<div class="line"><span>'.strtoupper($split[0])." <span style='font-weight:300'>".strtoupper($split[1])."</span></span></div>";
        }
        $banner .= "</div>";
        echo '

    <style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800");

#name{
margin-top:0;
padding-top: 0.1em;
padding-bottom: 0.1em;
padding-left: 0.2em;
color:#fff;
line-height: 1.8em;
font-family: "Open Sans";
        letter-spacing: .5em;
        font-size:5vw;
        text-align: center;
    }
#name span{
padding-left:0.2em;
background-color: rgba(255,238,88, 0.8);
}
    #label{
        font-family: "Open Sans";
        letter-spacing: 0.5em;
        font-size: 1em;
        text-align:center;
    }
.center-header {
    margin: 0 auto;
    top: 40%;
    position: absolute;
    display: block;
}
.centered{
    position: relative;
    margin-top: 10vh;
    text-align:center;
         background-repeat: no-repeat;
         background-position: 50% 50%;
             background-size: 100%;
         background-clip: padding-box;
         }
#callout{
border-style: solid;
    border-width: 5px;
position:absolute;
top: 100%;
right: ;
}
h1{
    text-align:center;
    margin-top:4em;
}
#hide{
opacity:0;
}
.banner{
    position:absolute;
    bottom: 0px;
    right: 0px;
    font-size: 5vw;
    font-family:"Open Sans";
    text-align: right;
    line-height: 1em;
    font-weight: 300;

}
.banner .line:last-of-type{
font-weight: 800;
}
</style>        
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



