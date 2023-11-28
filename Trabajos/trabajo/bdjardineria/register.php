<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../includes/metadata2.php"; ?>
</head>
<body>
<?php include "../includes/header2.php"; ?> <!-- Aquí se incluye el contenido.php -->
<?php include "../includes/menu2.php"; ?>

    <div class="contenedor">
    <?php include "../includes/nav_bbdd.php"; ?>

<main>
<?php
if (!$_REQUEST) {
    ?>
<h2>Registro de Usuario</h2>

<form action="#" method="post">
  <label for="username">Nombre de Usuario:</label><br>
  <input type="text" id="username" name="username"><br>

  <label for="password">Contraseña:</label><br>
  <input type="password" id="password" name="password"><br>

  <label for="confirm_password">Confirmar Contraseña:</label><br>
  <input type="password" id="confirm_password" name="confirm_password"><br>

  <input type="submit" value="Registrar">
</form>

<?php
}else{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden. Por favor, vuelva a intentarlo.";
       
         header("Location: register.php");
        exit;
    }else{
        include "conectabd.php"; 
        $contraseñaEncriptada= password_hash($password,PASSWORD_BCRYPT);
        $instruccion = "INSERT into usuarios (nombre, clave) values ('$user', name'$contraseñaEncriptada')";
        $consulta = mysqli_query($conexion, $instruccion) or exit("Fallo en la inserción");
        print "Usuario $user insertado con éxito.<br><br>";
    }
    mysqli_close ($conexion);
}
?>
</main> 
    <?php include "../includes/aside2.php"; ?>
</div>
<?php include "../includes/footer2.php"; ?>
</body>
</html>