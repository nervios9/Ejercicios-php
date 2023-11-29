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
// Verificar si el usuario no está logeado
if (!isset($_SESSION['logged_in'])) {
    // Si no está logeado, redirigir a la página de inicio de sesión
   echo "Para acceder a esta seccion tienes que <a  href='login.php'>
    Iniciar Sesion</a> o <a  href='register.php' > Registrarse</a>";

   
}else{
	
?>
	
	<p style="text-align:end;">Usuario:<?php print $_SESSION['nombre']?>
		<form style="text-align:end;" method="post" action="login.php">
		<input  type="submit" name="eliminar_sesion" value="Cerrar Sesión">
  		</form> 
	</p>

	
	<h1>Lista Clientes</h1>
	<?php
		include "conectabd.php";
	

	$sql="SELECT CodigoCliente, NombreCliente, NombreContacto from clientes";
	$resulconsulta=mysqli_query($conexion,$sql) or die ("Error al hacer la consulta");

	$nfilas=mysqli_num_rows($resulconsulta);
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>CODIGO CLIENTE</th><th>NOMBRE CLIENTE</th><th>NOMBRE CONTACTO</th>";
	echo "</tr>";
	for($i=1;$i<=$nfilas;$i++)
	{
		$fila=mysqli_fetch_row($resulconsulta);		
		
		echo "<tr>";
		echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conexion);
}
?>   
</main> 
    <?php include "../includes/aside2.php"; ?>
</div>
<?php include "../includes/footer2.php"; ?>
</body>
</html>