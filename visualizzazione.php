<?php
$folder = ".\images\\";

$file = glob($folder . "*.{jpg,jpeg,png,gif}",GLOB_BRACE);


foreach($file as $meme){
    
    echo '<div class="post">
            <img src="' . $meme . '" alt="meme" />
          </ div>  
            ';
}

