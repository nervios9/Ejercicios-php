<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST["opcion"];
     if ($opcion>=2 && $opcion <=32){
        $opcion++;
     }else if($opcion >=33){
        $opcion+=+2;

     }else{
         
     }
    
   
}
$conexion=mysqli_connect("localhost", "root","","jardineria") or die ("No se puede conectar con el servidor");

          
?>
<form  method="GET">
        <label for="codigoCliente">Codigo Cliente</label>
        <?php
           

            echo  '<input type="text" id="codigoCliente" name="codigoCliente" disabled value="'.$opcion.'"  required><br>';   
        ?>
        <label for="nombre">Nombre del cliente:</label>
        <?php
        
             $query = "SELECT NombreCliente FROM clientes WHERE CodigoCliente='".$opcion."'";
            $resulconsulta = mysqli_query($conexion, $query);

           
             
               
           
            $nombre = mysqli_fetch_assoc($resulconsulta);
           
                echo $opcion;
            echo '<input type="text" id="nombre" name="nombre" value="'.$nombre['NombreCliente'].'" required><br>';
            
            
            
       ?>

               
       
        <label for="nombre">Nombre del contacto:</label>
        <?php
        
        $query = "SELECT NombreContacto FROM clientes WHERE CodigoCliente='".$opcion."'";
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
           
       echo '<input type="text" id="nombreContacto" name="nombreContacto" value="'.$nombre['NombreContacto'].'" required><br>';
       
       
       
  ?>

        <label for="nombre">Apellido del Contacto:</label>
        <?php
        
        $query = "SELECT ApellidoContacto FROM clientes WHERE CodigoCliente='".$opcion."'";
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
           
       echo '<input type="text" id="apellidoContacto" name="apellidoContacto" value="'.$nombre['ApellidoContacto'].'" required><br>';
       
       
       
  ?>


        <label for="nombre">Telefono:</label>
        <?php
        
             $query = "SELECT Telefono FROM clientes WHERE CodigoCliente='".$opcion."'";
            $resulconsulta = mysqli_query($conexion, $query);

           
             
               
           
            $nombre = mysqli_fetch_assoc($resulconsulta);
           
              
            echo '<input type="text" id="telefono" name="telefono" value="'.$nombre['Telefono'].'" required><br>';
            
            
            
       ?>

        <label for="nombre">Fax:</label>
        <?php
        
             $query = "SELECT Fax FROM clientes WHERE CodigoCliente='".$opcion."'";
            $resulconsulta = mysqli_query($conexion, $query);

           
             
               
           
            $nombre = mysqli_fetch_assoc($resulconsulta);
           
               
            echo '<input type="text" id="fax" name="fax" value="'.$nombre['Fax'].'" required><br>';
            
            
            
       ?>

        <label for="nombre">Direccion 1:</label>
        <?php
        
        $query = "SELECT LineaDireccion1 FROM clientes WHERE CodigoCliente='".$opcion."'";
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
         
       echo '<input type="text" id="direccion1" name="direccion1" value="'.$nombre['LineaDireccion1'].'" required><br>';
       
       
       
  ?>


        <label for="nombre">Direccion 2:</label>
        <?php
        
        $query = "SELECT LineaDireccion2 FROM clientes WHERE CodigoCliente='".$opcion."'";
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
       echo '<input type="text" id="direccion2" name="direccion2" value="'.$nombre['LineaDireccion2'].'"><br>';
       
       
       
  ?>

        <label for="nombre">Ciudad:</label>
        <?php
        
        $query = "SELECT Ciudad FROM clientes WHERE CodigoCliente='".$opcion."'";
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
       echo '<input type="text" id="direccion2" name="direccion2" value="'.$nombre['Ciudad'].' "required><br>';
       
       
       
  ?>

        <label for="nombre">Region:</label>
        <?php
        
        $query = "SELECT Region FROM clientes WHERE CodigoCliente='".$opcion."'";
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
       echo '<input type="text" id="direccion2" name="direccion2" value="'.$nombre['Region'].'"><br>';
       
       
       
  ?>

        <label for="nombre">Pais:</label>
        <?php
        
        $query = "SELECT Pais FROM clientes WHERE CodigoCliente='".$opcion."'";
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
       echo '<input type="text" id="direccion2" name="direccion2" value="'.$nombre['Pais'].' "required><br>';
       
       
       
  ?>

        <label for="nombre">Codigo Postal:</label>
        <?php
        
        $query = "SELECT CodigoPostal FROM clientes WHERE CodigoCliente='".$opcion."'";
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
       echo '<input type="text" id="direccion2" name="direccion2" value="'.$nombre['CodigoPostal'].' "required><br>';
       
       
       
  ?>

        <label for="nombre">CodigoEmpleadoRepVentas:</label>
        <select id="codigoEmpleado" name="codigoEmpleado"><br>
            <?php
             $conexion=mysqli_connect("localhost", "root","","jardineria") or die 
             ("No se puede conectar con el servidor");

             $query1= "SELECT CodigoEmpleadoRepVentas FROM clientes WHERE CodigoCliente='".$opcion."'";
             $resulconsulta1 = mysqli_query($conexion, $query1);

             $instruccion = 'SELECT CodigoEmpleado,Nombre,Apellido1,Apellido2 FROM empleados';
             $resulconsulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta");
             $nfilas = mysqli_num_rows ($resulconsulta);
             
            


             
             $opcion1 = mysqli_fetch_array($resulconsulta1);
           
             for ($i=0; $i<$nfilas; $i++)  {
                
               $opcion = mysqli_fetch_array($resulconsulta);
                if($opcion1['CodigoEmpleadoRepVentas']==$opcion['CodigoEmpleado']){

                    echo '<option  value="' . $opcion['CodigoEmpleado'] . '" selected>' .$opcion['Nombre'].' '.$opcion['Apellido1'].' '.$opcion['Apellido2'] . '</option> <br>';
                }else{
                echo '<option value="' . $opcion['CodigoEmpleado'] . '">' .$opcion['Nombre'].' '.$opcion['Apellido1'].' '.$opcion['Apellido2'] . '</option> <br>';
                }
            }  
        
        ?>
        
        </select><br>
         <label for="nombre">Limite de Credito:</label>
         <?php
        $opcion = intval($opcion);
        $query = "SELECT LimiteCredito FROM clientes WHERE CodigoCliente=".$opcion;
       $resulconsulta = mysqli_query($conexion, $query);

      
        
          
      
       $nombre = mysqli_fetch_assoc($resulconsulta);
      
       echo '<input type="text" id="limiteCredito" name="limiteCredito" value="'.$nombre['LimiteCredito'].' "required><br>';
       
       
       
  ?>
       
        
       
        <input type="submit" value="Enviar">

        
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
$codigoCliente = $_GET["codigoCliente"];
$nombreCliente = $_GET["nombre"];
$nombreContacto = $_GET["nContacto"];
$apellidoContacto = $_GET["aContacto"];
$telefono = $_GET["telefono"];
$fax = $_GET["fax"];
$direccion1 = $_GET["direccion1"];
$direccion2 = $_GET["direccion2"];
$ciudad = $_GET["ciudad"];
$region = $_GET["region"];
$pais = $_GET["pais"];
$codigoPostal = $_GET["codigoPostal"];
$limiteCredito = $_GET["limiteCredito"];
$codigoEmpleado = $_GET["codigoEmpleado"];


$conexion=mysqli_connect("localhost", "root","","jardineria")
 or die ("No se puede conectar con el servidor");


 $consulta = "UPDATE clientes SET 
 NombreCliente = '$nombreCliente',
 NombreContacto = '$nombreContacto',
 ApellidoContacto = '$apellidoContacto',
 Telefono = '$telefono',
 Fax = '$fax',
 Direccion1 = '$direccion1',
 Direccion2 = '$direccion2',
 Ciudad = '$ciudad',
 Region = '$region',
 Pais = '$pais',
 CodigoPostal = '$codigoPostal',
 LimiteCredito = '$limiteCredito',
 CodigoEmpleadoRepVentas = '$codigoEmpleado'
 WHERE codigoCliente = '$codigoCliente'";
 $resulconsulta = mysqli_query($conexion, $query);
}
?>
</body>
</html>