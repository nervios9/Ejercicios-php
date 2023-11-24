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
        $b500=0;
        $b200=0;
        $b100=0;
        $b50=0;
        $b20=0;
        $b10=0;
        $b5=0;
        $m2=0;
        $m1=0;
        $miArray =array(500, 200, 100, 50, 20, 10, 5, 2, 1);
        echo $numero ." se puede dividir en :<br>";
       
        while ($numero>=500){
        $numero=$numero-500;
        $b500++;   
        }
        while ($numero>=200){
            $numero=$numero-200;
            $b200++;   
        }
        while ($numero>=100){
            $numero=$numero-100;
            $b100++;   
        }
        while ($numero>=50){
            $numero=$numero-50;
            $b50++;   
        }
        while ($numero>=20){
            $numero=$numero-20;
            $b20++;   
        }
        while ($numero>=10){
            $numero=$numero-10;
            $b10++;   
        }
        while ($numero>=5){
            $numero=$numero-5;
            $b5++;   
        }
        while ($numero>=2){
            $numero=$numero-2;
            $m2++;   
        }
        while ($numero>=1){
            $numero=$numero-1;
            $m1++;   
        }
        echo" Nº de unidades de 500€ es: ".$b500."<br>";
        echo" Nº de unidades de 200€ es: ".$b200."<br>";
        echo" Nº de unidades de 100€ es: ".$b100."<br>";
        echo" Nº de unidades de 50€ es: ".$b50."<br>";
        echo" Nº de unidades de 20€ es: ".$b20."<br>";
        echo" Nº de unidades de 10€ es: ".$b10."<br>";
        echo" Nº de unidades de 5€ es: ".$b5."<br>";
        echo" Nº de unidades de 2€ es: ".$m2."<br>";
        echo" Nº de unidades de 1€ es: ".$m1."<br>";
    }
    ?>

</body>
</html>