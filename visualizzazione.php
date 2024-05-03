<?php
$folder = ".\images\\";

$file = glob($folder . "*.{jpg,jpeg,png,gif}",GLOB_BRACE);


foreach($file as $meme){
    $nomefile = pathinfo($meme, PATHINFO_FILENAME);
    echo '<div class="post">
            <img src="' . $meme . '" alt="'. $nomefile .'" />
          </ div>  
            ';
}

