<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Index</title>
</head>

<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
?>

<body>
    <div class="header">
        <div class="logo-container">
            <a href="./Index.php"><img class="logo" src="../images/maskcat.png" alt="Logo"></a>
        </div>
        <div class="search-bar">
            <input class="search-input" type="text" placeholder="Search...">
            <button class="search-button"><i class="fa fa-search"></i> </button>
        </div>
        <div class="hamburger-menu">
            <div class="bordermenu">
                <p><i class="fa fa-bars" aria-hidden="true"></i></p>
            </div>

            <div class="dropdown-menu">
                <?php 
                if(!$isLoggedIn) { ?>
                    <a href="../templates/ImieiMemes"><i class="fa fa-object-group" aria-hidden="true"></i> I miei Memes</a>
                    <a href="../templates/Upload.html"><i class="fa fa-upload" aria-hidden="true"> Upload</i></a>
                    <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                <?php
                } else {
                ?>                
                <a href="../templates/Registrazione.html"><i class="fa fa-user"></i> Registrati</a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<div>
    <?php include '..\visualizzazione.php';?>
</div>
</body>

<footer>
<div class="row">
  <div class="columnc">
  <p id="Company">©Grande Memes Company 2024</p>
  </div>
  <div class="columnI">
        <p><i class="fa fa-facebook" aria-hidden="true"></i></p>
        <p><i class="fa fa-telegram" aria-hidden="true"></i></p>
        <p><i class="fa fa-instagram" aria-hidden="true"></i></p>
        <a href="https://github.com/Ikt0/progfin"><p><i class="fa fa-github" aria-hidden="true"></i></p></a>
  </div>
  
  <div class="columnf">
  <p>What is a meme? <i class="fa fa-question-circle" aria-hidden="true"></i></p>
  </div>
</div>
        
</footer>
</html>