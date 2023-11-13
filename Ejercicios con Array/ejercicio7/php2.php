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
        $equipoSeleccionado = $_POST["opciones"];

    
  
    
  
   

$listaEquipos=array( "F.C. Barcelona"=>82, "Real Madrid"=>84,
 "Atlético Madrid"=>78, "Valencia"=>75, "Sevilla"=>76,
  "Villarreal"=>60, "Málaga"=>50, "Espanyol"=>47, 
  "Athletic Bilbao"=>55, "Celta"=>51, "Real Sociedad"=>46,
   "Rayo Vallecano"=>49, "Getafe"=>36, "Osasuna"=>33,
    "Elche"=>41, "Deportivo"=>38, "Almería"=>29, "Levante"=>37,
     "Granada"=>35, "Zaragoza"=>32);


     
   echo "El ". $equipoSeleccionado." tiene ". $listaEquipos[$equipoSeleccionado]." puntos"; 
}
     mostrarArrayComoTabla($listaEquipos);
     function mostrarArrayComoTabla($array) {
        arsort($array);
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

    
    ?>
</body>
</html>