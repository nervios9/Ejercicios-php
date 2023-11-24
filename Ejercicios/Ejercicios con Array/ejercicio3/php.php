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
        $suma=0;
        $miArray[0] =$_POST["lunes"];
        $miArray[1] =$_POST["martes"];
        $miArray[2] =$_POST["miercoles"];
        $miArray[3] =$_POST["jueves"];
        $miArray[4] =$_POST["viernes"];
        $miArray[5] =$_POST["sabado"];
        $miArray[6] =$_POST["domingo"];
        for ($i = 0; $i <=6; $i++) {
        $suma= $suma +$miArray[$i];
        
        }
        $resultado= $suma/7;
        echo "la media de temperatura de toda la semana es: ".$resultado;
    }
    ?>

</body>
</html>