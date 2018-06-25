<link rel="stylesheet" href="https://raw.githubusercontent.com/zirafa/bootstrap-grid-only/master/css/grid100.css"/>
<?php
$json = file_get_contents('https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=roberthosking&api_key=2b589eba605af20d3453524d0ce96474&format=json');
$obj = json_decode($json, true)['recenttracks']['track'];
$queue = [];
for($i=0; $i<3; $i++){
    $artist = $obj[$i]['artist']['#text'];
    $track = $obj[$i]['name'];
    $image = $obj[$i]['image'][3]['#text'];
    if($image==""){
    $image = "https://roberthosking.com/wp-content/uploads/2018/06/Untitled.jpg";
    }
    $nowplaying = false;
    if(isset($obj[$i]['@attr']) && $obj[$i]['@attr']['nowplaying']=="true"){
        $nowplaying = true;
    }
 
array_push($queue, [$image, $track, $artist, $nowplaying]);

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
.track{
font-family: "Open Sans";
font-size:1em;
margin-bottom: 0px;

}
.artist{
font-family:"Open Sans";
font-size: .75em;
font-weight: 800;
color:#404040;
}
@media only screen and (max-width: 745px) {
    .panel {
        display:none;
    }
.panel .art img{
max-width:240px;}
.panel:first-of-type{
display:block;
}
}
.art{
position:relative;
}

#bars {
    height: 30px;
    left: 8%;
    margin: -30px 0 0 -20px;
    position: absolute;
    bottom: -7%;
    width: auto;
    transform: translate(-50%, -50%);

}

.bar {
   background: rgb(255, 238, 88);
    bottom: 1px;
    height: 3px;
    position: absolute;
    width: 20px;      
    animation: sound 0ms -800ms linear infinite alternate;
}

@keyframes sound {
    0% {
       opacity: .35;
        height: 3px; 
    }
    100% {
        opacity: 1;       
        height: 28px;        
    }
}

.bar:nth-child(1)  { left: 0px; animation-duration: 474ms; }
.bar:nth-child(2)  { left: 22px; animation-duration: 433ms; }
.bar:nth-child(3)  { left: 44px; animation-duration: 407ms; }
.bar:nth-child(4)  { left: 66px; animation-duration: 400ms; }
.bar:nth-child(5)  { left: 88px; animation-duration: 458ms; }
.bar:nth-child(6)  { left: 110px; animation-duration: 458ms; }
.bar:nth-child(7)  { left: 132px; animation-duration: 427ms; }
.bar:nth-child(8)  { left: 154px; animation-duration: 441ms; }
.bar:nth-child(9)  { left: 176px; animation-duration: 419ms; }
.bar:nth-child(10)  { left: 198px; animation-duration: 487ms; }
.bar:nth-child(11) { left: 220px; animation-duration: 442ms; }

#play{
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
</style>


<div class="container">
    <div class="wrapper">
    <?php foreach($queue as $track): ?>        
        <div class="panel">
<div class="art">            
<img src="<?php echo $track[0]; ?>"  />
<?php if($track[3]):?>

<div id='bars'>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
<div class="bar"></div>
</div>

<p id="play">NOW PLAYING</p>
<?php endif; ?>
</div>            
<p class="track"><?php echo $track[1] ?></p>
            <p class="artist"><?php echo $track[2] ?></p>
        </div>
    <?php endforeach; ?>
    </div>
</div>


