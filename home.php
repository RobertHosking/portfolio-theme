<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package York Lite
 * @author  Rich Tabor of ThemeBeans <hello@themebeans.com>
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 */

get_header();


echo "
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:700');

#name{
margin-top:0;
padding-top: 0.1em;
padding-bottom: 0.1em;
padding-left: 0.2em;
color:#fff;
line-height: 1.8em;
font-family: 'Open Sans';
        letter-spacing: .5em;
        font-size:5vw;
        text-align: center;
    }
#name span{
padding-left:0.2em;
background-color: rgba(255,238,88, 0.8);
}

    #label{
        font-family: 'Open Sans';
        letter-spacing: 0.5em;
        font-size: 1em;
        text-align:center;
    }

.center-header {
      width: 100%;
        margin: 0 auto;
    top: 40%;
    position: absolute;
    display: block;
}

.centered{
    position: relative;
    margin-top: 10vh;
    text-align:center;
   
     background-image: url('http://67.207.88.196/f/image.png');
         background-repeat: no-repeat;
         background-position: 50% 50%;
             background-size: 50%;

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

/*  
    <div id='callout'><h1>Designer</h1></div> 

*/
</style>
        <div class='centered'>
        <img src='http://67.207.88.196/f/image.png' width='60%' id='hide'>
        <div class='center-header'>
       <h1 id='name'><span>ROBERT HOSKING</span></h1>
       </div>
       </div>
     <div class='entry-content'> 

     <h6 style='text-align:center'>Welcome. Have a look around. I don't mind.</h6>
     <h1>I do web design.</h1>
     <img src='http://67.207.88.196/f/macbook_pro_15.jpg' width='100%'>
     <br>
     <br>
     <br>
     <p style='text-align: center;'>
     ";

echo do_shortcode("[maxbutton id='1' text='Explore More' url='https://roberthosking.com/projects']");
echo "
    </p>
    <h1>I take photos.</h1>
    <img src='http://67.207.88.196/f/polaroid-photos.jpg' width='100%'>

    <br>
    <br>
    <br>
     <p style='text-align: center;'>
     ";

echo do_shortcode("[maxbutton id='1' text='Explore More' url='https://roberthosking.com/photography']");

echo "
    </p>
<h1>I blog.</h1>
      ";
echo do_shortcode("[wp_show_posts id='721']");



echo "</div>"; //entry-content
get_footer();
