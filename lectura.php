<?php
    $mensaje = "";

    if(empty($_POST["numero"])){
        $mensaje = "Debe ingresar un numero";
    }else{
        if(is_numeric($_POST["numero"])){
            $mensaje = "Bien, numero correcto!";
        }else{
            $mensaje = "Debe ingresar un numero correcto";
        }
    }

    if(empty($_POST["nombre"]) || !is_string($_POST["nombre"])){
        $mensaje .= "<br>Debe ingresar un nombre";
    }else{
        $mensaje .= "<br>Bien, nombre correcto";

    }

    header("Location: index.php?mensaje=".$mensaje);