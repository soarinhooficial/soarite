<?php
define('ROOT_PATH', str_replace('\\', '/', realpath(dirname(__FILE__))) . '/');
define('PATH', '/soarite/');

// Configurações do banco de dados
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "soarite";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
