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

if(isset($_REQUEST)){
 if (!$columna1==$fila2) {
    echo "El numero de columnas  de la primera matriz no es igual al numer0 de las filas de la segunda ";
 }else {
 
 }
   }else
   $formulario1=<<<"fin"
   <form method="get" action="index.php" method="POST">
           <label for="valor_dolares">Filas en del primer termino de la Matriz:</label>
           <input type="text" id="valor_dolares" name="fila1" max="5"  required><br>
   
   
           <label for="valor_dolares">Columnas en del primer termino de la Matriz:</label>
           <input type="text" id="valor_dolares" name="columna1"  max="5" required><br>
   
   
           <label for="valor_dolares">Filas en del segundo termino de la Matriz:</label>
           <input type="text" id="valor_dolares" name="fila2"  max="5" required><br>
   
           <label for="valor_dolares">Columnas en del primer termino de la Matriz:</label>
           <input type="text" id="valor_dolares" name="columna2"  max="5" required><br>
   
           <input type="submit" value="Enviar">
       </form>  
   
   fin;
   echo $formulario1;
   
   
   
   if($_REQUEST){
    if(isset($_REQUEST["fila1"])){
        //respuesta
    }else{
        //pasar datos
        if($columna1 !=$fila2){
            //no coincide, recargar ejercicio
        }else{
            //formulario2

            //al enviar los datos mandar los datos en hidden para no perderlo
        }
    }
   }

  //formulario1;
  
    
   






?>



</body>
</html>