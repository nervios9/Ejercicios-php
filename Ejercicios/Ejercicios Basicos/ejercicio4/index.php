<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
   
table, th, td {
  border: 1px solid #000; 
}


th {
  background-color: #f2f2f2; 
}


td {
  background-color: #fff; 
}
    </style>
</head>
<body>
<main>
<?php
generarTablas();
function generarTablas() {
  static$num=1;
    for ($i = 1; $i <=4; $i++) {
      $filas=aleatorio();
      $columnas=aleatorio();
      echo "<div>";
      echo "Tabla HTML de". $columnas ."X".$filas;
      echo '<table>';
        for ($g= 1; $g <= $filas; $g++) {
        echo '<tr>';
            
        for ($j = 1; $j <= $columnas; $j++) {
          
          echo "<td>".$num."</td>"; 
          $num++;  
        
        }
      
      
      echo '</tr>';
        
   }
   echo "</table>";
   echo "</div>";
   $num=1;
  

}
}
function aleatorio(){
    $numero_aleatorio = mt_rand(2, 15);
    return $numero_aleatorio;
   }
?> 
</main>
</body>
</html>