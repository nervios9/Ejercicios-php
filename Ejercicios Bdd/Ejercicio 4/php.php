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
    
    if($opcion=="opcion1"){
        $opcion="Australia";
      
       }else if($opcion=="opcion2"){
        $opcion="España";
        
       }else if($opcion=="opcion3"){
        $opcion="France";
     
       }else if($opcion=="opcion4"){
        $opcion="Spain";
     
       }else if($opcion=="opcion5"){
        $opcion="United Kingdom";
       }else if($opcion=="opcion6"){
        $opcion="USA";
    }
    
    $conexion=mysqli_connect("localhost", "root","","jardineria") or die ("No se puede conectar con el servidor");



    $instruccion = 'SELECT CodigoCliente,NombreCliente,NombreContacto,ApellidoContacto FROM clientes where Pais = "'.$opcion .'" order by CodigoCliente asc' ;
    $resulconsulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta");


$nfilas = mysqli_num_rows ($resulconsulta);
if ($nfilas > 0)   {
    print ("<TABLE border='1'>");
print ("<TR>");
print ("<TH>Codigo Cliente</TH>");
print ("<TH>Nombre Cliente</TH>");
print ("<TH>NombreContacto</TH>");
print ("<TH>ApellidoContacto</TH>");
print ("</TR>");

for ($i=0; $i<$nfilas; $i++)  {
 $resultado = mysqli_fetch_row($resulconsulta);
    print ("<TR>");
    foreach  ($resultado as $valor)  {print ("<TD>" . $valor. "</TD>");  }
    print ("</TR>");
}
// Mostrar resultados de la consulta
print ("</TABLE>\n");
}
else{
   print ("No hay articulos disponibles");
   
}
    }
    
    
        ?>
</body>
</html>