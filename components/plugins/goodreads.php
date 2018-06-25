<?php
$xml = simplexml_load_string(file_get_contents("https://www.goodreads.com/review/list?v=2&id=60660893&shelf=currently-reading&sort=date_read&order=d&key=exgYkzE2UZvGHcfotSqW2g"));
$json = json_encode($xml);
$array = json_decode($json,true);

$queue = [];

$cover = $array['reviews']['review']['book']['image_url'];
if(preg_match('/\bnophoto\b/',$cover)){
    $cover = "https://roberthosking.com/wp-content/uploads/2018/06/12743473.jpg";
}else{
    $cover = explode("/",$cover);
    $large = str_replace("m", "l", $cover[4]);
    $cover[4] = $large;
    $cover = implode("/", $cover);
}


$title = $array['reviews']['review']['book']['title'];
$author = $array['reviews']['review']['book']['authors']['author']['name'];

array_push($queue, [$cover, $title, $author, true]);

$xml = simplexml_load_string(file_get_contents("https://www.goodreads.com/review/list?v=2&id=60660893&shelf=read&sort=date_read&order=d&key=exgYkzE2UZvGHcfotSqW2g"));
$json = json_encode($xml);
$array = json_decode($json,true);

for($i=0; $i<2; $i++){
$cover = $array['reviews']['review'][$i]['book']['image_url'];
if(preg_match('/\bnophoto\b/',$cover)){
    $cover = "https://roberthosking.com/wp-content/uploads/2018/06/12743473.jpg";
}else{
$cover = explode("/",$cover);
$large = str_replace("m", "l", $cover[4]);
$cover[4] = $large;
$cover = implode("/", $cover);
}
$title = $array['reviews']['review'][$i]['book']['title'];
$author = $array['reviews']['review'][$i]['book']['authors']['author']['name'];

array_push($queue, [$cover, $title, $author, false]);
}

?>
<style>
.wrapper {
  display: flex;
  flex-wrap: wrap;
}

.wrapper {
  display: grid;
  margin: 0 auto;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-auto-rows: minmax(150px, auto);
}

.panel {
  /* needed for the flex layout*/
  margin-left: 5px;
  margin-right: 5px;
  flex: 1 1 200px;
}
@supports (display: grid) {
  .wrapper > * {
    margin: 0;
  }
}
.cover{
position: relative;
}
#now{
color:#fff;
background:#000;
text-align:center;
font-family: "Open Sans";
position: absolute;
bottom:10px;
left:-5px;
font-weight: 800;
padding-right: 5px;
padding-left: 5px;
}
.title{
font-family: "Open Sans";
font-size:1em;
margin-bottom: 0px;
}
.author{
font-family:"Open Sans";
font-size: .75em;
font-weight: 800;
color:#404040;
}
.bookmark, .bookmark:before, .bookmark:after{ 
    box-sizing: border-box; 
    -moz-box-sizing: border-box; 
    -webkit-box-sizing: border-box; 
} 
.bookmark{ 
    position: absolute; 
    top: -5px;
left:25px;    
height: 70px; 
    width: 50px; 
    padding: 0px; 
    -webkit-transform: rotate(0deg) skew(0deg); 
    transform: rotate(0deg) skew(0deg); 
    border-left: 25px solid rgb(255, 238, 88); 
    border-right: 25px solid rgb(255, 238, 88); 
    border-bottom: 25px solid transparent; 
}
</style>
<div class="wrapper">
    <?php foreach($queue as $book): ?>
    <div class="panel">
<div class="cover">
<img src="<?php echo $book[0]; ?>" />
<?php if($book[3]): ?>
<p id="now">NOW READING</p>
<div class="bookmark"></div>
<?php endif;?>
</div>
<p class="title"><?php echo explode(":",$book[1])[0]; ?></p>
<p class="author"><?php echo $book[2]; ?></p>
    </div>

    <?php endforeach; ?>
</div>
