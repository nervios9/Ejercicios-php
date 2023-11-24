<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="php.php" method="post">
        <label for="nombre">Nombre del cliente:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="nombre">Nombre del contacto:</label>
        <input type="text" id="nContacto" name="nContacto" required><br>

        <label for="nombre">Apellido del Contacto:</label>
        <input type="text" id="aContacto" name="aContacto" required><br>


        <label for="nombre">Telefono:</label>
        <input type="text" id="telefono" name="telefono" required><br>

        <label for="nombre">Fax:</label>
        <input type="text" id="fax" name="fax" required><br>

        <label for="nombre">Direccion 1:</label>
        <input type="text" id="direccion1" name="direccion1" required><br>


        <label for="nombre">Direccion 2:</label>
        <input type="text" id="direccion2" name="direccion2"><br>

        <label for="nombre">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required><br>

        <label for="nombre">Region:</label>
        <input type="text" id="region" name="region" ><br>

        <label for="nombre">Pais:</label>
        <input type="text" id="pais" name="pais" required><br>

        <label for="nombre">Codigo Postal:</label>
        <input type="text" id="codigoPostal" name="codigoPostal" required><br>

        <label for="nombre">Limite de credito:</label>
        <input type="text" id="limiteCredito" name="limiteCredito" required><br>

        <label for="nombre">Codigo empleado:</label>
        <select id="codigoEmpleado" name="codigoEmpleado">
            <?php
             $conexion=mysqli_connect("localhost", "root","","jardineria") or die 
             ("No se puede conectar con el servidor");



             $instruccion = 'SELECT CodigoEmpleado,Nombre,Apellido1,Apellido2 FROM empleados';
             $resulconsulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta");
             $nfilas = mysqli_num_rows ($resulconsulta);
             
               
             
             for ($i=0; $i<$nfilas; $i++)  {
               $opcion = mysqli_fetch_array($resulconsulta);
               
                echo '<option value="' . $opcion['CodigoEmpleado'] . '">' . $opcion['CodigoEmpleado'].' '.$opcion['Nombre'].' '.$opcion['Apellido1'].' '.$opcion['Apellido2'] . '</option>';
            }  
                
             

           
        
            ?>
            
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>