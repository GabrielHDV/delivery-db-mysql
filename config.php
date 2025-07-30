<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = 'localhost'; // Alterar se necessário
$username = 'root'; // Alterar se necessário
$password = ''; // Alterar se necessário
$dbname = 'mydb'; // Alterar se necessário



// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
