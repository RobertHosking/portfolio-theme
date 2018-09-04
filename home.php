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
    
margin-left:-355px;
  animation: slidein 7s;
    margin: 0 auto;
    top: 40%;
    position: absolute;
    display: block;
  overflow:hidden;
  white-space:nowrap;
}
.centered{
    position: relative;
    margin-top: 10vh;
    text-align:center;
   
     background-image: url('https://roberthosking.com/wp-content/uploads/2018/07/image.png');
         background-repeat: no-repeat;
         background-position: 50% 50%;
             background-size: 40%;

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
@media only screen and (min-width: 960px) {
#page{
background:url('https://roberthosking.com/wp-content/uploads/2018/06/s0957757_sc7.png') no-repeat left bottom, url('https://roberthosking.com/wp-content/uploads/2018/06/sdfasdfads.png') no-repeat right bottom;
}
}


@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}
/*  
    <div id='callout'><h1>Designer</h1></div> 

 */
#social img{
margin:.5em;
}
</style>
        <div class='centered'>
        <img src='https://roberthosking.com/wp-content/uploads/2018/07/image.png' width='60%' id='hide'>
        <div class='center-header'>
       <h1 id='name'><span>ROBERT HOSKING</span></h1>
       </div>
       </div>
       <div class='entry-content'>
<div id='social' style='text-align:center;'>
<a target='_blank' href='https://www.github.com/roberthosking'>
<img src='https://roberthosking.com/wp-content/uploads/2018/06/GitHub-Mark-64px.png' />
</a>
<a target='_blank' href='https://www.instagram.com/robert_hosking'>
<img src='https://roberthosking.com/wp-content/uploads/2018/06/instagram-icon-white-on-black-circle.png' />
</a>
<a target='_blank' href='https://www.linkedin.com/in/robhossboss'>
<img src='https://roberthosking.com/wp-content/uploads/2018/06/linkedin_circle_black-512.png'/>
</a>
</div>
     <blockquote><p style='text-align:center'>Welcome. Have a look around. I don't mind.</p></blockquote>
     <h1>I do web design.</h1>
     <img src='https://roberthosking.com/wp-content/uploads/2018/06/macbook_pro_15.jpg' width='100%'>
     <br>
     <br>
     <br>
     <p style='text-align: center;'>
     ";

echo do_shortcode("[maxbutton id='1' text='Explore More' url='https://roberthosking.com/projects']");
echo "
    </p>
    <h1>I take photos.</h1>
    <img src='https://roberthosking.com/wp-content/uploads/2018/06/polaroid-photos.jpg' width='100%'>

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

echo "<br><br><br> <p style='text-align:center'>";

echo do_shortcode("[maxbutton id='1' text='Explore More' url='https://roberthosking.com/blog']");

echo "</p></div>"; //entry-content


    
get_footer();
