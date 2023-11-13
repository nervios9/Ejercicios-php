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
$array=generarArrayAleatorio(50,1,100);
$arrayNuevo=eliminarRepetidos($array);
calcularMedia($arrayNuevo);
function generarArrayAleatorio($longitud,$max,$min){
    for ($i = 0; $i <=$longitud; $i++){
    $array[$i]=rand($min,$max);
    
   
}
echo "Array generado aleatoriamente";
print_r($array);
echo"<br><br>";
return $array;
}
function eliminarRepetidos($array){
 $arrayNuevo=array_unique($array);


 echo "Array sin numeros repetidos";
 print_r($arrayNuevo);
 echo"<br><br>";
 return $arrayNuevo;
}
function calcularMedia($array){
    $suma=0;
    for ($i = 0; $i <count($array); $i++){
        if(isset($array[$i])){
    $suma+=$array[$i];
        }
   
}
$resultado= $suma/count($array);
echo "<br> <br>";
echo "La media de numeros es: ".$resultado;
}
?>
    
</body>
</html>