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
    $valor=0;
    $media=0;
    $valorMax=0;
    $valorMin=100;
    for ($i = 0; $i <=99; $i++){
        $array[$i]=aleatorio();
    }
    $contador =array(0,0,0,0,0,0,0,0,0,0);
    for ($i = 0; $i <=99; $i++){
    if ($array[$i]<10){
        $contador[0]++;
    }else if($array[$i]>9 && $array[$i] <20){
        $contador[1]++;
    }else if($array[$i]>19 && $array[$i] <30){
        $contador[2]++;
 
    }else if($array[$i]>29 && $array[$i] <40){
        $contador[3]++;
    }else if($array[$i]>39 && $array[$i] <50){
        $contador[4]++;

    }else if($array[$i]>49 && $array[$i] <60){
        $contador[5]++;

    }else if($array[$i]>59 && $array[$i] <70){
        $contador[6]++;

    }else if($array[$i]>69 && $array[$i] <80){
        $contador[7]++;
   
    }else if($array[$i]>79 && $array[$i] <90){
        $contador[8]++;

    }else if($array[$i]>89 ){
        $contador[9]++;

    }
$media+= $array[$i];
if($valorMax<$array[$i]){
    $valorMax=$array[$i];
}
if($valorMin>$array[$i]){
    $valorMin=$array[$i];
}
    }
    $resultado= $media/100;

    function aleatorio(){
    $numero_aleatorio = mt_rand(1, 100);
    return $numero_aleatorio;
   }
    ?>
     <table border="1">
        <tr>
            <th>Intervalo</th>
            <th>Frecuencia</th>
        </tr>
        <tr>
            <td> 0-9</td>
            <td><?php echo  $contador[0] ; ?></td>
        </tr>
        <tr>
            <td> 10-19</td>
            <td><?php echo  $contador[1] ; ?></td>
        </tr>
        <tr>
            <td> 20-29</td>
            <td><?php echo  $contador[2] ; ?></td>
        </tr>
        <tr>
            <td> 30-39</td>
            <td><?php echo  $contador[3] ; ?></td>
        </tr>
        <tr>
            <td> 40-49</td>
            <td><?php echo  $contador[4] ; ?></td>
        </tr>
        <tr>
            <td> 50-59</td>
            <td><?php echo  $contador[5] ; ?></td>
        </tr>
        <tr>
            <td> 60-69</td>
            <td><?php echo  $contador[6] ; ?></td>
        </tr>
        <tr>
            <td> 70-79</td>
            <td><?php echo  $contador[7] ; ?></td>
        </tr>
        <tr>
            <td> 80-89</td>
            <td><?php echo  $contador[8] ; ?></td>
        </tr>
        <tr>
            <td> >90</td>
            <td><?php echo  $contador[9] ; ?></td>
        </tr>
    </table>

    <table border="1"> 
<tr>
    <td>Edad Media</td>
    <td> <?php echo $resultado?></td>
</tr>
<tr>
    <td>Edad maxima</td>
    <td><?php echo $valorMax?></td>
</tr>
<tr>
    <td>Edad minima</td>
    <td><?php echo $valorMin?></td>
</tr>
    </table>
</body>
</html>