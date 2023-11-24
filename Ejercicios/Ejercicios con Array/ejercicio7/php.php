<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php2.php" method="POST">
        <label for="opciones">Selecciona una opción:</label>
        <select name="opciones" id="opciones">
            <?php
            $listaEquipos = array(
                "F.C. Barcelona",
                "Real Madrid",
                "Atlético Madrid",
                "Valencia",
                "Sevilla",
                "Villarreal",
                "Málaga",
                "Espanyol",
                "Athletic Bilbao",
                "Celta",
                "Real Sociedad",
                "Rayo Vallecano",
                "Getafe",
                "Osasuna",
                "Elche",
                "Deportivo",
                "Almería",
                "Levante",
                "Granada",
                "Zaragoza"
            );

            foreach ($listaEquipos as $equipo) {
                echo '<option value="' . $equipo . '">' . $equipo . '</option>';
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Comprobar">
    </form>   

</body>
</html>