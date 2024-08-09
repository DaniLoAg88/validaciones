<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DNI</title>
    <link rel="stylesheet" href="css/dniStyle.css">
</head>
<body>
    <div class="container">
        <div>
            <img src="img/dni.jpg" alt="Imagen DNI">
        </div>
        <h2>Validacion del DNI</h2>
        <form action="dniBack.php" method="post">
            <p>
                <label for="dni">Introduce el dni:</label>
            </p>
            <p>
                <input type="text" name="dni" id="dni">
            </p>
            <p class="centrado">
                <input type="submit" value="Validar" class="boton">
            </p>
        </form>
        <?php
            if(!empty($_GET["mensaje"])){
                echo $_GET["mensaje"];
            }
        ?>
    </div>


</body>
</html>
