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
    $valorDolares = $_GET["valor_dolares"];
    $valorLibras = $_GET["valor_libras"];
    
    echo "Tabla de conversión de 1 a 10 euros:<br>";

    echo '<table style="border-collapse: collapse; width: 100%;">';
    echo '<tr style="background-color: #0074D9; color: white; font-weight: bold;">';
    echo '<td>Cantidad de Euros</td>';
    echo '<td>Conversion a Dólares</td>';
    echo '<td>Conversion a Libras</td>';
    echo '</tr>';

    for ($euros = 1; $euros <= 10; $euros++) {
        $conversionDolares = $euros * $valorDolares;
        $conversionLibras = $euros * $valorLibras;
        
        $bgColor = ($euros % 2 == 0) ? 'red' : 'green';

        echo '<tr style="background-color: ' . $bgColor . ';">';
        echo "<td>$euros euros</td>";
        echo "<td>$conversionDolares dólares</td>";
        echo "<td>$conversionLibras libras</td>";
        echo '</tr>';
    }

    echo '</table>';
}
?>
<p><a href="index.html"><br>Volver a realizar la conversión</br></a></p>
</body>
</html>
</body>
</html>