<?php

$folder = "..\images\\";
// $file = glob($folder . "*.{jpg,jpeg,png,gif}",GLOB_BRACE);

//DB
$host = 'localhost';
$dbname = 'sito_meme';
$username = 'root';
$password = '12345';

//temporaneo Cuore
$linkCuore="http://www.w3.org/2000/svg";
$pathCuore="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15";


try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}

// session_start();

$queryCount="SELECT COUNT(id_img) FROM immagini";
$oggettoCount = $pdo->query($queryCount);
$numeroMemes = $oggettoCount->rowCount();

for($y=1; $y<=$numeroMemes; $y++){ //per ogni meme

    $queryPercorso = "SELECT percorso FROM immagini WHERE id_img = :id";
    $stmt = $pdo->prepare($queryPercorso);
    $stmt->execute(['id' => $y]);
    $nomeFile = $stmt->fetch(PDO::FETCH_ASSOC)['percorso'];
    // var_dump($nomeFile);
    $meme = $folder.$nomeFile;
    // var_dump($meme);

    $queryLikes = "SELECT likes FROM immagini WHERE id_img = $y";
    $stmt = $pdo->query($queryLikes);
    $numeroLikes = $stmt->fetch(PDO::FETCH_ASSOC)['likes'];
    // var_dump($numeroLikes);

    $queryNome = "SELECT titolo FROM immagini WHERE id_img = $y";
    $stmt = $pdo->query($queryNome);
    $titolo = $stmt->fetch(PDO::FETCH_ASSOC)['titolo'];

    echo '<div class="meme">
      <h2>'.$titolo.'</h2>
      <figure><img src="'.$meme.'" alt="'.$nomeFile.'"></figure>
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
