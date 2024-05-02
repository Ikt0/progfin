<?php
$folder = "images/";

$file = glob($folder . "*.{jpg,jpeg,png,gif}",GLOB_BRACE);

foreach($file as $meme){
    echo '<img src="' . $image . '" alt="meme" />';
}

