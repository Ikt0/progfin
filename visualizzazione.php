<?php

$folder = ".\images\\";
// $file = glob($folder . "*.{jpg,jpeg,png,gif}",GLOB_BRACE);

//DB
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Your MySQL username
$password = "12345"; // Your MySQL password

//temporaneo Cuore
$linkCuore="http://www.w3.org/2000/svg";
$pathCuore="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15";


$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database
$conn->select_db("sito_meme");

$queryCount="SELECT COUNT(id_img) FROM immagini";
$numeroMemes = $conn->query($queryCount);
//temporaneo Dati
// $numeroLikes = 1234; //da cambiare con il numero di likes nel database
// $arrayAssociativoCommenti=[]; //da cambiare con i dati per i commenti nel database
// $posizioneImmagineProfilo = "immagine profilo"; //da cambiare con il percorso dell'immagine profilo dell'utente

for($y=1; $y<=$numeroMemes; $y++){ //per ogni meme

    $queryPercorso = "SELECT percorso FROM immagini WHERE id_img = $y"; //da cambiare con l'id del meme
    $nomeFile = $conn->query($queryPercorso);
    $meme = $folder.$nomeFile;

    $queryLikes = "SELECT likes FROM immagini WHERE id_img = $y"; //da cambiare con l'id del meme
    $numeroLikes = $conn->query($queryLikes);

    $queryNome = "SELECT titolo FROM immagini WHERE id_img = $y"; //da cambiare con l'id del meme
    $nomefile = $conn->query($queryNome);

    echo '<div class="meme">
      <h2>'.$nomefile./*da cambiare con il nome meme nel database*/'</h2>
      <figure><img src="'.$meme.'" alt="'.$nomefile.'"></figure>
        <div id="area">
          <div id="like">
            <button>
              <svg xmlns="'.$linkCuore.'" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="'.$pathCuore.'" />
              </svg>
            </button> <div>'.$numeroLikes.'</div>
          </div>
          <div class="border">
            <form action="POST">
              <input placeholder="commento" id="ins_commento" name="ins_commento" type="text">
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
        </div>'
  ;}

