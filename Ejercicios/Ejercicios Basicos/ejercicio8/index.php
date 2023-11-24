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
$numero_aleatorio=0;
for ($i = 1; $i <=4; $i++) {
$resultados=circulo();
$area = $resultados["area"];
$circunferencia = $resultados["circunferencia"];

echo "Área del círculo de radio " .$numero_aleatorio.": " . $area . "<br>";
echo "Longitud de la circunferencia de radio " .$numero_aleatorio.": " . $circunferencia. "<br> <br>";
}
function circulo() {
    $radio=aleatorio();
    $area = M_PI * pow($radio, 2);

    $circunferencia = 2 * M_PI * $radio;

    $resultados = array(
        "area" => $area,
        "circunferencia" => $circunferencia
    );

    return $resultados;
}

function aleatorio(){
    global $numero_aleatorio;
    $numero_aleatorio = mt_rand(1,20);
    return $numero_aleatorio;
   }
    ?>
    
</body>
</html>