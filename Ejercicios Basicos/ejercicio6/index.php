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
    
    for ($i = 1; $i <=4; $i++) {
$resultado=esPrimo(aleatorio());
if($resultado===true){
    echo " es primo <br>";
}else{
    echo " no es primo <br>";
}

    }
    function esPrimo($numero){
        echo $numero;
        if ($numero <= 1) {
            return false;
        }
        if ($numero <= 3) {
            return true;
        }
        if ($numero % 2 == 0 || $numero % 3 == 0) {
            return false;
        }
        $i = 5;
        while ($i * $i <= $numero) {
            if ($numero % $i == 0 || $numero % ($i + 2) == 0) {
                return false;
            }
            $i += 6;
        }
        return true;
        
    }
    function aleatorio(){
        $numero_aleatorio = mt_rand(1, 100);
        return $numero_aleatorio;
       }
    ?>
</body>
</html>