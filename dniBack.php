<?php
    $mensaje = "";
    //isset() devuelve true si la variable existe y no es null
    if(!empty($_POST["dni"])){
        $dni = $_POST["dni"];
        $expReg = '/^[0-9]{8}[A-Za-z]{1}$/';

        //preg_match() te comprueba la expresión regular pasada dentro de la variable que indicamos
        if(preg_match($expReg, $dni) && validarLetra($dni)){
            $mensaje = "El DNI es correcto";
        }else{
            $mensaje = "El DNI no es valido";
        }

    }else{
        $mensaje = "* Debe introducir un DNI";
    }

    header("Location: dniFront.php?mensaje=".$mensaje);

    function validarLetra($dni) {
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

        //Cogemos desde la posición 0, 8 caracteres, dejando fuera el 9 que será la letra y nos quedamos sólo con los números
        $numeroDNI = substr($dni,0,8);
        
        //Calculamos el resto de los números, y nos da la posición de la letra
        $resto = $numeroDNI % 23;
        
        //Comprobamos en el "array" de caracteres la posición que nos ha dado el resto, y lo comparamos con la letra (pasandola a mayuscula) de la posición 8 del DNI(letra)
        if($letras[$resto] == strtoupper(substr($dni, 8, 1))){
            return true;
        }else{
            return false;
        }
        
    }