<?php
// MySQL server configuration
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Your MySQL username
$password = "12345"; // Your MySQL password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql_create_db = "CREATE DATABASE IF NOT EXISTS sito_meme";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database 'sito_meme' created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("sito_meme");

// Create 'utenti' table
$sql_create_utenti = "CREATE TABLE IF NOT EXISTS utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    password VARCHAR(255),
    karma INT
)";
if ($conn->query($sql_create_utenti) === TRUE) {
    echo "Table 'utenti' created successfully<br>";
} else {
    echo "Error creating table 'utenti': " . $conn->error . "<br>";
}

// Create 'immagini' table
$sql_create_immagini = "CREATE TABLE IF NOT EXISTS immagini (
    id_img INT AUTO_INCREMENT PRIMARY KEY,
    id_utente INT,
    FOREIGN KEY (id_utente) REFERENCES utenti(id),
    percorso VARCHAR(255),
    likes INT,
    titolo VARCHAR(255)
)";
if ($conn->query($sql_create_immagini) === TRUE) {
    echo "Table 'immagini' created successfully<br>";
} else {
    echo "Error creating table 'immagini': " . $conn->error . "<br>";
}

// Create 'commenti' table
$sql_create_commenti = "CREATE TABLE IF NOT EXISTS commenti (
    id_commento INT AUTO_INCREMENT PRIMARY KEY,
    id_utente INT,
    FOREIGN KEY (id_utente) REFERENCES utenti(id),
    id_immagine INT,
    FOREIGN KEY (id_immagine) REFERENCES immagini(id_img),
    testo VARCHAR(255)
)";
if ($conn->query($sql_create_commenti) === TRUE) {
    echo "Table 'commenti' created successfully<br>";
} else {
    echo "Error creating table 'commenti': " . $conn->error . "<br>";
}

// Close connection
$conn->close();
