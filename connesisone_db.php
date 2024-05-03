<?php
// Creazione della connessione al database
$servername = "localhost";
$username = "";
$password = "";
$dbname = "sito meme";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Creazione della tabella "utenti"
$sql = "CREATE TABLE utenti (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    password VARCHAR(20) NOT NULL,
    karma INT(6) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabella utenti creata con successo";
} else {
    echo "Errore nella creazione della tabella: " . $conn->error;
}

// Creazione della tabella "images"
$sql = "CREATE TABLE images (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titolo VARCHAR(30) NOT NULL,
    num_comm INT(5) NOT NULL,
    num_likes INT(5) NOT NULL,
    propietario INT(6),
    directory VARCHAR(50) NOT NULL,
    FOREING KEY (propietario) REFERENCES utenti(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabella images creata con successo";
} else {
    echo "Errore nella creazione della tabella: " . $conn->error;
}

// Creazione della tabella "commenti"
$sql = "CREATE TABLE commenti (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    propietario INT(6),
    num_likes INT(5),
    id_img INT(6),
    commento VARCHAR(300),
    FOREING KEY (id_img) REFERENCES images(id),
    FOREING KEY (propietario) REFERENCES utenti(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabella images creata con successo";
} else {
    echo "Errore nella creazione della tabella: " . $conn->error;
}


$conn->close();