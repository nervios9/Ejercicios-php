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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $cantidadEuros = $_GET["cantidad_euros"];
    $monedaDestino = $_GET["moneda_destino"];
    $valorCambioDolares = 1.0543;
    $valorCambioLibras = 0.8678;




    if($monedaDestino == "usd"){
        $cantidadDolares = $cantidadEuros * $valorCambioDolares;
        $cantidadConvertida = $cantidadEuros * $valorCambioDolares;
        $monedaSimbolo = "$";
        echo " $cantidadEuros euros equivalen a $cantidadConvertida $monedaSimbolo";
    }elseif($monedaDestino == "gbp"){
        $cantidadLibras = $cantidadEuros * $valorCambioLibras;
        $cantidadConvertida = $cantidadEuros * $valorCambioLibras;
        $monedaSimbolo = "£";
        echo " $cantidadEuros euros equivalen a $cantidadConvertida $monedaSimbolo";
    }else
    echo "Por favor, seleccione una moneda de destino válida.";
    
    
}

?>
<p><a href="index.html"><br>Volver a realizar la conversión</br></a></p>
</body>
</html>