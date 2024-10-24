-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2024 a las 19:10:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portafolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(30) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`, `is_admin`) VALUES
(5, 'leo', '$2y$10$BgtCKI1ydzvsrIdErkQNI./JDWLBvzm8JlHUxwBxHFEe3UClwzKPq', '2024-10-23 20:11:05', 'elio2020lci.z@gmail.com', 1),
(6, 'DARK1E', '$2y$10$tnsHQUuzpSrHDr62FfXnj.uIJwjCglBoJvy2ieotPsokrhaCST4bO', '2024-10-23 20:25:32', 'lexingtonsmith8@gmail.com', 0),
(9, 'graciela', '$2y$10$Vo57fi8fWPNklB1RQZnCFOZbLKWF2r6sXQP93R0LspaIj1GGuXZLe', '2024-10-24 15:30:15', 'graciela@gmail.com', 0),
(10, 'parce', '$2y$10$lc1iH6AcAR89p5EUDAg4iufO03fwsj9HACXk3zJ4gupq0IO55L9HO', '2024-10-24 15:30:41', 'lockme@gmail.com', 0),
(11, 'grasa', '$2y$10$dC.dEomrV7yFUtbF3ivB3eii.pQxIdKQ7d66bls381FHvVY3PIiJ.', '2024-10-24 15:30:57', 'grasoso@gmail.com', 0),
(12, 'sismo22', '$2y$10$zOzHhbWL/mJpHRQGnni8Uu/N6dnyG6WDg51/tzuZHW/W2/GHA3GVq', '2024-10-24 15:31:17', 'veinte@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
