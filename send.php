<?php
require 'vendor/autoload.php'; // Asegúrate de cargar la biblioteca Dotenv

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['host'];
$username = $_ENV['username'];
$password = $_ENV['password'];
$database = $_ENV['database'];
$table = $_ENV['Table'];

$Tipo_Serv = $_POST['services'];
$nombre_empresa = $_POST['companyName'];
$fecha_Contacto = $_POST['contactDate'];
$Email = $_POST['email'];
$Num_Telefono = $_POST['phoneNumber'];


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $sql = "INSERT INTO $table";
}

