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
        $numero = $_POST["numero"];
        $miArray = range(0, 11);
        $resultado = $miArray[$numero % 12];
        echo "el resto de dividir ".$numero ." entre 12 es :".$resultado;
    }
    ?>

</body>
</html>