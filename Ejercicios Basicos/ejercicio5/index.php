<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
   

    </style>
</head>
<body>
<main>
<?php
conversorMonedas();
function conversorMonedas() {
    $dolares=1.0543;
    $libras= 0.8678;
    echo "Pruebas de funcion para el cambio de divisas <br>";
    for ($i = 1; $i <=4; $i++) {
     $num= aleatorio(); 
    $divisa=divisa();
    if($divisa=="dolares"){
        $conversion=$num*$dolares;
    }else{
        $conversion=$num*$libras; 
    }
   echo "El resultado de convertir ".$num." euros a ".$divisa." es: ".$conversion."<br>";
   
}

}
function aleatorio(){
    $numero_aleatorio = mt_rand(1, 100);
    return $numero_aleatorio;
   }
   function divisa(){
     $divisas = array("dolares", "libras"); 
    $divisa= $divisas[array_rand($divisas)];
    return $divisa;
   }

?> 
</main>
</body>
</html>