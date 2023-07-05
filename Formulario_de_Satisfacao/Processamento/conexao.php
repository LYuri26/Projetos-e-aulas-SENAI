<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";

try {
    // Cria a conexão com o banco de dados usando PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Configura o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Falha na conexão: " . $e->getMessage());
}
?>
