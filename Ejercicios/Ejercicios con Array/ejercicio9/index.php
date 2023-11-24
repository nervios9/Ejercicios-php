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
$palabras = array(
    "manzana","banana","pera","naranja","uva","kiwi","sandia","fresa","ciruela","mango"
);

$palabraMasLarga = ""; 
$palabraMasCorta = "aaaaaaaaaaaaaa"; 
$arrayLargas=array();
foreach ($palabras as $palabra) {
    if (strlen($palabra) > strlen($palabraMasLarga)) {
        $palabraMasLarga = $palabra;
    }
}
foreach ($palabras as $palabra) {
    if (strlen($palabra) < strlen($palabraMasCorta)) {
        $palabraMasCorta = $palabra;
    }
}


foreach ($palabras as $palabra) {
    if (strlen($palabra) >=5) {   
    $arrayLargas[]=$palabra;  
    }
}
echo "La palabra más larga en el array es: " . $palabraMasLarga."<br>";
echo "La palabra más corta en el array es: " . $palabraMasCorta."<br>";
print_r($arrayLargas);
echo "<br>";
asort($palabras);
print_r($palabras);
echo "<br>";
invertirPalabras($palabras);





function invertirPalabras($array){
  
    for ($i = 0; $i <=count($array)-1; $i++) {
        $palabraInvertir=$array[$i];

$posicion = array_search($palabraInvertir, $array);
if ($posicion !== false) {
    
    $array[$posicion] = strrev($palabraInvertir);
}
    
}
print_r($array);
}
    ?>
</body>
</html>