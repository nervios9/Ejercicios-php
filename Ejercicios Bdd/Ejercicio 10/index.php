<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $usuarios=array("jardinero"=>"jardinero","cristina"=>"cristina","enrique"=>"enrique","marta"=>"marta");
$conexion=mysqli_connect("localhost", "root","","jardineria") or die ("No se puede conectar con el servidor");

$instruccion='SHOW TABLES LIKE "usuarios"';
$resulconsulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta");
$nfilas=mysqli_num_rows ($resulconsulta);
if ($nfilas==0){
     $instruccion="CREATE TABLE usuarios(
        nombre varchar(50) NOT NULL,
        clave varchar(100) NOT NULL,
        PRIMARY KEY (nombre)
        ) engine=innodb;";
        mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta");
} 
$i=0;
foreach ($usuarios as $clave => $valor) {


 
    $nombre = $clave[$i];
 
    $contraseña = password_hash($valor[$i], PASSWORD_DEFAULT);

    $instruccion = "INSERT INTO usuarios (nombre, clave) VALUES ('$nombre', '$contraseña')";

    if (mysqli_query($conexion, $instruccion)) {
        echo "Usuario insertado correctamente: $nombre <br>";
    }
    $i++; 
}
mysqli_close($conn);
    ?>
</body>
</html>