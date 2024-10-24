<?php
session_start();
include 'db.php'; 

if (!isset($_SESSION['username']) || $_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.php");
    exit();
}

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

$stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
$stmt->bind_param("ssi", $username, $email, $id);

if ($stmt->execute()) {
    header("Location: admin.php?message=Usuario actualizado con éxito");
} else {
    header("Location: admin.php?error=Error al actualizar el usuario");
}

$stmt->close();
$conn->close();
?>
