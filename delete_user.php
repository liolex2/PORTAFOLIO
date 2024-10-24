<?php
session_start();
include 'db.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Usuario eliminado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al eliminar el usuario.');</script>";
    }
    $stmt->close();
}

header("Location: admin.php");
exit();
?>
