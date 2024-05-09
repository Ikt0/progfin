<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Index</title>
</head>

<body>
    <div class="header">
        <div class="logo-container">
            <a href="./Index.html"><img class="logo" src="../images/maskcat.png" alt="Logo"></a>
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
<div>
    <?php include '..\visualizzazione.php';?>
</div>
</body>

</html>