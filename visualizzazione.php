<?php
$folder = ".\images\\";

$file = glob($folder . "*.{jpg,jpeg,png,gif}",GLOB_BRACE);


foreach($file as $meme){
    $nomefile = pathinfo($meme, PATHINFO_FILENAME);
    echo '<div class="meme">
    <figure><img src="'.$meme.'" alt=""></figure>
    <div  id="area">
        <div id="like">
            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-heart" viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                </svg></button> <div>20.000</div>
        </div>
        <div class="border">
            <form action="">
                <input placeholder="comment" id="" name="" type="text">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div id="comment">
       <figure><img src="../images/negromelone.jpg" alt=""></figure> 
       <div>
        <p>nome</p>
        <p>sgdfhgasr asjrhkjasrh kjahrkjlah kjarh kajrh arh </p>
       </div>
    </div>
    <div id="comment">
        <figure><img src="../images/negromelone.jpg" alt=""></figure> 
        <div>
         <p>nome</p>
         <p>ajfh afjhkajfh aiufdhf aioufhiuaf rhiluarh iaruh</p>
        </div>
     </div>
</div> 
            ';
}

