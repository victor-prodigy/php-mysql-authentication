<?php
// CONEXAO COM O BANCO DE DADOS
$host = "localhost";
$user = "root";
$password = ""; // mysql password
$database = "users_db"; // mysql name of database

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
