<div id="container">
    <div id="heading">
        <h1>Gallery</h1>
    </div>

    <div id="gallery">

<?php
$dir = "./images";
$img = scandir($dir);

foreach($img as $v) {
    if(stripos($v, '.jpg')) echo '<a href="$dir()" target="_blank"><img src="'.$v.'" width="30%" height="30%" /></a>';
    if(stripos($v, '.png')) echo '<a href="$dir()" target="_blank"><img src="'.$v.'" width="30%" height="30%" /></a>';
}
        
?>


    </div>
</div>
<div id="footer">
    </div>