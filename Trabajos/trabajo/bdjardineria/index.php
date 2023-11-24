<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../includes/metadata2.php"; ?>
</head>
<body>
<?php include "../includes/header2.php"; ?> <!-- Aquí se incluye el contenido.php -->
<?php include "../includes/menu2.php"; ?>
<?php
session_start();

// Verificar si el usuario no está logeado
if (!isset($_SESSION['logged_in'])) {
    // Si no está logeado, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
    <div class="contenedor">
    <?php include "../includes/nav_bbdd.php"; ?>

<main>
<h3>Zona de ejercicios de base de datos</h3>
     <p>Aqui se pueden consultar desde el menu de navegacion algunos de los ejercicios realizados
        en el modulo sobre programacion base de datos
     </p>   
</main> 
    <?php include "../includes/aside2.php"; ?>
</div>
<?php include "../includes/footer2.php"; ?>
</body>
</html>