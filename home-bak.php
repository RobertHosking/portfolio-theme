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
padding-top: 0.1em;
padding-bottom: 0.1em;
padding-left: 0.2em;
color:#fff;
line-height: 1.8em;
font-family: 'Open Sans';
        letter-spacing: .5em;
        font-size:2.5em;
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

.center {
      width: 100%;
        margin: 0 auto;
    top: 40%;
    position: absolute;
    display: block;
}

.centered{
    position: relative;
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

#callout h1{

padding: .4em;
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
        <div class='center'>
       <h1 id='name'><span>ROBERT HOSKING</span></h1>
       </div>
       </div>
       ";

get_footer();
