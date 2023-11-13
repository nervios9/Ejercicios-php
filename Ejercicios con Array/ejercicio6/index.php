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
$localidades = [ "Palencia" => 80000, "Valladolid" => 350000, "Oviedo" => 120000,
"Madrid" => 3320000, "Barcelona" => 1620000, "Zaragoza" => 666880, "Soria" => 39112,
 "Huesca" => 52463, "Teruel"     => 35691];


mostrarArrayComoTabla($localidades);
mostrarArrayOrdenada($localidades);
mostrarArrayOrdenadaIndice($localidades);

function mostrarArrayComoTabla($array) {
    // Comprueba si el parámetro es un array y si tiene elementos
    if (is_array($array) && !empty($array)) {
        echo '<table border=1   >';
        echo '<tr><th>Clave</th><th>Valor</th></tr>';
        
        foreach ($array as $clave => $valor) {
            echo '<tr><td>' . $clave . '</td><td>' . $valor . '</td></tr>';
        }
        
        echo '</table>';
    } else {
        echo 'El parámetro no es un array o está vacío.';
    }
}
function mostrarArrayOrdenada($array){
    arsort($array);

if (is_array($array) && !empty($array)) {
    echo '<br><br><table border=1   >';
    echo '<tr><th>Clave</th><th>Valor</th></tr>';
    
    foreach ($array as $clave => $valor) {
        echo '<tr><td>' . $clave . '</td><td>' . $valor . '</td></tr>';
    }
    
    echo '</table>';
} else {
    echo 'El parámetro no es un array o está vacío.';
}
}
function mostrarArrayOrdenadaIndice($array){
ksort($array);
if (is_array($array) && !empty($array)) {
    echo '<br><br><table border=1   >';
    echo '<tr><th>Clave</th><th>Valor</th></tr>';
    
    foreach ($array as $clave => $valor) {
        echo '<tr><td>' . $clave . '</td><td>' . $valor . '</td></tr>';
    }
    
    echo '</table>';
} else {
    echo 'El parámetro no es un array o está vacío.';
}
}
?>
</body>
</html>