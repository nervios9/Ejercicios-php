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
<p style="text-align:end;">Usuario:<?php print $_SESSION['nombre']?>
		<form style="text-align:end;" method="post" action="login.php">
		<input  type="submit" name="eliminar_sesion" value="Cerrar Sesión">
  		</form> 
	</p>

   <h1>Estadistica</h1>
<?php
if (!isset($_SESSION['logged_in'])) {
   // Si no está logeado, redirigir a la página de inicio de sesión
   echo "Para acceder a esta seccion tienes que <a  href='login.php'>
    Iniciar Sesion</a> o <a  href='register.php' > Registrarse</a>";
}else{
   // Conectar con el servidor de base de datos
   include "conectabd.php";

   // Seleccionar base de datos
   mysqli_select_db ($conexion,"jardineria")
      or die ("No se puede seleccionar la base de datos");

   // Enviar consulta
   $instruccionSQL="SELECT productos.Gama, gamasproductos.DescripcionTexto, COUNT(*) FROM productos INNER JOIN gamasproductos ON productos.Gama=gamasproductos.Gama GROUP BY productos.Gama";
   $resulconsulta = mysqli_query ($conexion,$instruccionSQL)
      or die ("Fallo en la consulta");

   // Mostrar resultados de la consulta
   $nfilas = mysqli_num_rows ($resulconsulta);
   if ($nfilas > 0)
   {
      print ("<table>");
      print ("<tr>");
      print ("<th>Gama</th>");
      print ("<th>Descripción</th>");
      print ("<th>Nº de productos</th>");
      print ("</tr>");

      for ($i=1; $i<=$nfilas; $i++)
      {
         $unafila = mysqli_fetch_row ($resulconsulta);
	      print ("<tr>");
         print ("<td>" . $unafila[0] . "</td>");
         print ("<td>" . $unafila[1] . "</td>");
         print ("<td>" . $unafila[2] . "</td>");
         print ("</tr>");
      }
      print ("</table>");
   }
   else
      print ("No hay productos");

   // Cerrar conexión
   mysqli_close ($conexion);
}
?>
      
</main> 
    <?php include "../includes/aside2.php"; ?>
</div>
<?php include "../includes/footer2.php"; ?>
</body>
</html>