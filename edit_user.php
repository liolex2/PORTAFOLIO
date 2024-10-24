<?php
session_start();
include 'db.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "Usuario no encontrado.";
        exit();
    }
} else {
    echo "ID de usuario no proporcionado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>

<div class="container">
    <h1>Editar Usuario</h1>
    <form action="edit_user_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="username">Nombre de Usuario</label>
        <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>

        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

        <label for="password">Nueva Contraseña (opcional)</label>
        <input type="password" name="password" id="password">

        <button type="submit">Guardar Cambios</button>
        <button type="button" class="cancel-button" onclick="window.location.href='admin.php';">Cancelar</button>
    </form>
</div>

</body>
</html>
