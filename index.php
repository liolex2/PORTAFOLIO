<?php
session_start(); // Inicia la sesión al principio del archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="img/ssssss.png" alt="Logo de la marca" />
        </div>
        <div class="menu-toggle" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <nav id="menu">
            <ul class="menu-horizontal">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Proyectos</a></li>
                <li>
                    <a href="#">Cosas</a>
                    <ul class="menu-vertical">
                        <li><a href="#">........</a></li>
                        <li><a href="#">........</a></li>
                        <li><a href="#">........</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contacto</a>
                    <ul class="menu-vertical">
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </li>
                <li></li>
                <li></li>
                <li id="sesion">
                    <?php if (isset($_SESSION['username'])): ?>
                        <a href="logout.php">Cerrar sesión</a>
                    <?php else: ?>
                        <a href="loguear.html">Loguear</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>

    <section id="sobre-mi" class="sobre-mi-section">
        <h2>Sobre mí</h2>
        <p>
        Lionel Cruz es un estudiante de 18 años que cursa su último año de secundaria en el Colegio.
        Aunque no destaca por tener un promedio, es un alumno que muestra un compromiso 
        constante con sus estudios dea. A lo largo de su trayectoria escolar,
        ha enfrentado desafíos en algunas materias, pero busca mejorar.
        </p>
        <p>
        Uno de los proyectos más significativos en los que ha trabajado es un proyecto de medio ambiente, donde
        junto a sus compañeros se propusieron crear conciencia sobre la importancia de la sostenibilidad.
        Organizaron una campaña en la escuela que incluía charlas sobre Alojamientos lionel.
        </p>
        <a href="Curriculum vitae.docx" class="btn">Descargar CV</a>
    </section>
    <section id="habilidades">
    <h2>Habilidades</h2>
    <div class="habilidades-container">
        <!-- Habilidad HTML5 -->
        <div class="habilidad">
            <i class="fab fa-html5"></i>
            <a href="html/ja3.html"><h3>HTML5</h3></a>
            <div class="barra barra-html">
                <div class="progreso progreso-html" style="width: 90%;"></div> <!-- HTML5 -->
            </div>
        </div>

        <div class="habilidad">
            <i class="fab fa-css3-alt"></i>
            <a href="html/ja2.html"><h3>CSS3</h3></a>
            <div class="barra barra-css">
                <div class="progreso progreso-css" style="width: 70%;"></div> <!-- CSS3 -->
            </div>
        </div>

        <div class="habilidad">
            <i class="fab fa-js"></i>
            <a href="html/ja1.html"><h3>JavaScript</h3></a>
            <div class="barra barra-js">
                <div class="progreso progreso-js" style="width: 60%;"></div> <!-- JavaScript -->
            </div>
        </div>

        <div class="habilidad">
            <i class="fab fa-php"></i>
            <a href="html/ja0.html"><h3>PHP</h3></a>
            <div class="barra barra-php">
                <div class="progreso progreso-php" style="width: 50%;"></div> <!-- PHP -->
            </div>
        </div>
    </div>
</section>




<section id="proyectos">
    <h2>Proyectos</h2>
    <div class="proyectos-container">
        <!-- Proyecto 1 -->
        <div class="proyecto">
            <img src="img/esooooo.jpeg" alt="Vista previa del Proyecto 1">
            <h3>Jornadas Turisticas</h3>
            <p>Este proyecto consiste en una aplicación web diseñada específicamente para estudiantes de turismo, enfocada en la organización de jornadas turísticas. Al iniciar, los usuarios reciben credenciales básicas que les permiten acceder a la plataforma, donde pueden crear y gestionar cuentas de administradores. A su vez, los administradores tienen la capacidad de crear nuevas cuentas para otros administradores.</p>
            <a href="#">Ver más</a>
        </div>

        <div class="proyecto">
            <img src="img/playhubbb.png" alt="Vista previa del Proyecto 2">
            <h3>Smart Garden</h3>
            <p>Smart Garden es un sistema automatizado diseñado para optimizar el cuidado de jardines utilizando tecnología IoT. Este proyecto permite a los usuarios monitorear en tiempo real las condiciones del jardín a través de sensores que registran la humedad del suelo y la luminosidad, asegurando un entorno adecuado para las plantas.y mas cositas pero eso no destaca por ahora, asi que eso fue lo que paso.sidfgsdfdsfsfdsf</p>
            <a href="#">Ver más</a>
        </div>

        <div class="proyecto">
            <img src="img/smarttttt.png" alt="Vista previa del Proyecto 3">
            <h3>Playhub</h3>
            <p>Playhub es una plataforma interactiva diseñada para ofrecer a los usuarios una experiencia de entretenimiento basada en juegos, donde pueden ganar puntos en lugar de dinero. A través de una variedad de juegos dinámicos, los usuarios acumulan puntos que pueden canjear por diversas recompensas, lo que añade un componente motivacional y competitivo a la plataforma.</p>
            <a href="#">Ver más</a>
        </div>
    </div>
</section>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Contacto</h3>
            <p>Email: contacto@tudominio.com</p>
            <p>Teléfono: +123 456 789</p>
        </div>

        <div class="footer-section">
            <h3>Enlaces rápidos</h3>
            <ul class="footer-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Sobre mí</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Sígueme</h3>
            <div class="footer-socials">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://x.com/mistery_710?t=cJWCWGRKb2OGxYKztyoxBw&s=09" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/l10n3l.cr?igsh=MTJtMHljaG54ejZoYg==" class="fab fa-instagram"></a>
                <a href="https://www.tumblr.com/crazyboredasians" class="fab fa-linkedin-in"></a>
            </div>
        </div>
    </div>


    <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
</footer>
</body>
</html>
