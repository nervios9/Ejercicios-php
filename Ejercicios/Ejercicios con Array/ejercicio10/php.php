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
        $texto = $_POST["texto"];
}



if (esPalindromo($texto)) {
    echo "$texto es un palíndromo.";
} else {
    echo "$texto no es un palíndromo.";
}







function esPalindromo($texto) {
    // Eliminar espacios y signos de puntuación y convertir a minúsculas
    $texto = preg_replace('/[^a-z0-9]/i', '', strtolower($texto));
    
    // Revertir el texto
    $textoRevertido = strrev($texto);
    
    // Comparar el texto original con el texto revertido
    return $texto === $textoRevertido;
}
        ?>
</body>
</html>