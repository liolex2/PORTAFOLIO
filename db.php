<?php
$host = 'localhost'; 
$db = 'portafolio'; 
$user = 'root'; 
$password = ''; 

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>