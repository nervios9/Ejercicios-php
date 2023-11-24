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

    $numeroObtenido=0;
     $numero_aleatorio=0;
     for ($i = 1; $i <=4; $i++) {
      $numero=aleatorio();
      $suma=sumadivisores($numero);
      if (esperfecto($numero)) {
        echo "$numero es un número perfecto.<br>";
    } else {
        echo "$numero no es un número perfecto.<br>";
    }

     }
     numerosPerfectos();
    function sumaDivisores($numero){
       global $numeroObtenido;
       $numeroObtenido=$numero;
        $suma=0;
        for ($i = 1; $i <= $numero/2; $i++) {
            if ($numero % $i == 0) {
                $suma += $i;
                
            }
          }
    return $suma;
}
    function esPerfecto($numero){
        
        $sumaDivisores = sumaDivisores($numero);
        return $sumaDivisores === $numero;
}
    function aleatorio(){
        global $numero_aleatorio;
        $numero_aleatorio = mt_rand(1,1000);
        return $numero_aleatorio;
       }
       function numerosPerfectos(){
        $numerosPerfectos=0;
        for ($i = 2; $i <= 1000; $i++) {
            if (esperfecto($i)) {
                echo $i . " ";
                
       
    }
       }
       echo " son los numeros perfectos del 1 al 1000";
    }
    
    ?>

</body>
</html>