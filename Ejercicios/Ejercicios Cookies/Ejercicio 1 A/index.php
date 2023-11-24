<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <form action="php.php" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="nombre">Elige un Color:</label>
        <select id="opciones" name="opcion">
            <option value="opcion1">Celeste</option>
            <option value="opcion2">Naranja</option>
            <option value="opcion3">Amarillo</option>
            <option value="opcion3">Violeta</option>
            <option value="opcion3">Magenta</option>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>