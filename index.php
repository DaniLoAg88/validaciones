<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validaciones</title>
</head>
<body>
    <h1>Validación de datos</h1>

    <form action="lectura.php" method="post">
        <p>
            <label for="numero">Indica un número (max.10 digitos)</label>
<!--         <input type="number" id="numero" name="numero" min="1" max="999999999">-->
        <input type="text" id="numero" name="numero" pattern="[0-9]{10}">
        </p>

        <p>
            <label for="nombre">Indica tu nombre</label>
            <input type="text" id="nombre" name="nombre">
        </p>

        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

    <?php
        if(!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
    ?>





</body>
</html>
