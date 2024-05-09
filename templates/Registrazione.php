<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="uploadStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

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
                <a href="../templates/Registrazione.html"><i class="fa fa-user"></i> Registrati</a>
                <a href="../templates/ImieiMemes"><i class="fa fa-object-group" aria-hidden="true"></i> I miei Memes</a>
                <a href="../templates/Upload.html"><i class="fa fa-upload" aria-hidden="true"> Upload</i></a>
                <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
            </div>
        </div>
    </div>
    <div class="sec">
        <div>
            <form action="../registration.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password" required>
                <!-- <input type="password" name="confirm_password" placeholder="Conferma la Password" required> -->
                <input type="submit" value="Registrati" name="submit">
            </form>
        </div>
    </div>
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
            <a href="https://www.nytimes.com/2022/01/26/crosswords/what-is-a-meme.html"><p>What is a meme? <i class="fa fa-question-circle" aria-hidden="true"></i></p></a>
          </div>
        </div>
                
        </footer>
</body>

</html>