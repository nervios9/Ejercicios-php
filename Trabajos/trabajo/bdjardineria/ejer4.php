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

    if (isset($_REQUEST['enviar']))
    {
        $pais=$_REQUEST['Pais'];
        // Enviar consulta
        $instruccion = "SELECT CodigoCliente, NombreCliente, NombreContacto, ApellidoContacto  FROM  clientes WHERE Pais='$pais' ORDER BY CodigoCliente";
        $resconsulta = mysqli_query ($conexion,$instruccion)
            or die ("Fallo en la consulta");
        // Mostrar resultados de la consulta
        echo "<h1>LISTADO  DE CLIENTES DE --".$pais."-- EN BD JARDINERIA</h1><br>";
        echo "<table>";
        echo "<tr> <th>CÓDIGO</th> <th>NOMBRE</th> <th>NOMBRE CONTACTO</th> <th>APELLIDO CONTACTO</th> </tr>";
        while ($resultado = mysqli_fetch_row ($resconsulta))
        {
            echo "<tr>";
            for($i=0;$i<4;$i++){
                echo"<td>" .$resultado[$i]. "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</br><a href='ejer4.php'>Realizar nueva consulta</a>";
    }
    else
    {
        echo "<h1>Consulta de clientes por pais</h1><br>";
        $instruccion = "SELECT DISTINCT Pais FROM clientes ORDER BY Pais";
        $resconsulta = mysqli_query ($conexion,$instruccion)
            or die ("Fallo en la consulta");

        print ("<form action='ejer4.php' method='GET'>");
        print ("Elige País &nbsp");
        print ("<select name='Pais'>");
        $nfilas = mysqli_num_rows ($resconsulta);
        if ($nfilas > 0)
        {
            for ($i=1; $i<=$nfilas; $i++)
            {
                $resultado = mysqli_fetch_row ($resconsulta);
                echo "<option>". $resultado[0]."</option>";
            }
        }
        print ("</select>");
        print ("<br><br><p><input type='submit' name='enviar' value='Enviar consulta'></p>");
        print ("</form>");
    }
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