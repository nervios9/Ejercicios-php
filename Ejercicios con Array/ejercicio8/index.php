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
    $array = range(1, 20);
    print_r($array);
    echo "<br><br>";
    $arrayPares = array_filter($array, function($valor) {
        return $valor % 2 === 0;
    });
    print_r($arrayPares);
    echo "<br><br>";

    $arrayCuadrado = array_map('elevarAlCuadrado', $arrayPares);
    print_r($arrayCuadrado);
    echo "<br><br>";

    $resultado = array_reduce($arrayCuadrado, 'sumar');
    echo $resultado;
    echo "<br><br>";

    arsort($array);
    print_r($array);
    echo "<br><br>";


    function sumar($acumulador, $valor) {
        return $acumulador + $valor;
    }
    
   

    function elevarAlCuadrado($numero) {
        return $numero ** 2;
    }
    ?>
</body>
</html>