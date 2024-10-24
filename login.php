<?php
session_start();
include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];

            if ($user['is_admin']) {
                header("Location: admin.php"); 
            } else {
                header("Location: usuarios.php"); 
            }
            exit();
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
        }
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
    }
    $stmt->close();
}
?>
