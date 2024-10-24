<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        $to = "tuemail@example.com";  // Cambia esto a tu correo
        $subject = "Nuevo mensaje de contacto de " . $nombre;
        $body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
        $headers = "From: $email";

        // Enviar correo
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado con éxito.";
        } else {
            echo "Error al enviar el mensaje.";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
