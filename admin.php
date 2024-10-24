<?php
session_start();
include 'db.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

$stmt = $conn->prepare("SELECT id, username, email FROM users");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
        <h2>Lista de todos los usuarios:</h2>
        <ul>
        <?php
        while ($user = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($user['username']) . " <span>(" . htmlspecialchars($user['email']) . ")</span>";
            echo " <a href='edit_user.php?id=" . $user['id'] . "'>Modificar</a>";
            echo " <form action='delete_user.php' method='GET' style='display:inline;'>
                    <input type='hidden' name='id' value='" . $user['id'] . "'>
                    <button type='submit' onclick='return confirm(\"¿Estás seguro de que quieres eliminar este usuario?\");'>Eliminar</button>
                  </form>";
            echo "</li>";
        }
        ?>
        </ul>
        <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
