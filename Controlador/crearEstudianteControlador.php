<?php

require '../Modelo/gestionDatos.php';

if( (isset($_POST['nombreEstudiante'])) && (!empty($_POST['nombreEstudiante'])) &&
    (isset($_POST['correoEstudiante'])) && (!empty($_POST['correoEstudiante'])) &&
    (isset($_POST['notaUno'])) && (!empty($_POST['notaUno'])) &&
    (isset($_POST['notaDos'])) && (!empty($_POST['notaDos'])) &&
    (isset($_POST['notaTres'])) && (!empty($_POST['notaTres'])) ) {

        $nombre=$_POST['nombreEstudiante'];
        $correo=$_POST['correoEstudiante'];
        $nota1=$_POST['notaUno'];
        $nota2=$_POST['notaDos'];
        $nota3=$_POST['notaTres'];

        $datos = new operacionesCrud();
        $insertarregistro = $datos->registroCalificacion($nombre, $correo, $nota1, $nota2, $nota3);
    }

    $vista = "crearEstudiante.php";
    require "../Vistas/layout.php"


?>