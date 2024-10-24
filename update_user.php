<?php
session_start();
include 'db.php'; // Asegúrate de que la conexión a la base de datos esté bien configurada

// Verifica si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirige a login si no está autenticado
    exit();
}

// Verifica si se han enviado los datos del usuario
if (isset($_POST['id'], $_POST['username'], $_POST['email'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Consulta para actualizar el usuario
    $stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $username, $email, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Usuario actualizado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al actualizar el usuario.');</script>";
    }
    $stmt->close();
}

// Redirige de vuelta a la página de admin
header("Location: admin.php");
exit();
?>
