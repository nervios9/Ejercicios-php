<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php.php" method="POST">
        <label for="nombre">Codigo empleado:</label>
        <select id="opcion" name="opcion">
        <?php
            // Conecta a la base de datos
            $conexion=mysqli_connect("localhost", "root","","jardineria") or die ("No se puede conectar con el servidor");

            // Consulta para obtener los códigos de empleado
            $query = "SELECT Telefono,NombreCliente FROM clientes";
            $result = mysqli_query($conexion, $query);
            $i=0;
            // Muestra las opciones del menú desplegable
            while ($opcion = mysqli_fetch_assoc($result)) {
                $i++;
                echo '<option value="' . $i . '">' . $opcion['Telefono'].' '.$opcion['NombreCliente'] . '</option>';
            }

            // Cierra la conexión después de obtener los datos necesarios
            mysqli_close($conexion);
            ?>
        </select>
        <button type="submit">Enviar</button>
    </form> 
</body>
</html>