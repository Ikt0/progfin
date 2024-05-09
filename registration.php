<?php 
$host = 'localhost';
$dbname = 'sito_meme';
$username = 'root';
$password = '12345';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // check existing username
    $stmt = $pdo->prepare("SELECT * FROM utenti WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
        echo "Existing username";
        header('Location: '.$_SERVER['REQUEST_URI']);
        die();
    }

    // insert
    $stmt = $pdo->prepare("INSERT INTO utenti (nome, password, karma) VALUES (?, ?, 0)");
    $stmt->execute([$username, $password]);
    echo "Registration successful!";

    // login to get id
    $stmt = $pdo->prepare("SELECT * FROM utenti WHERE nome = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // start session
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['nome'];
        echo "Login successful!";
        header("Location: ./templates/index.php");
    } else {
        echo "Invalid username or password";
    }
}