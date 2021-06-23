<?php

require '../Modelo/gestionDatos.php';

if( (isset($_POST['codigoEstudiante'])) && (!empty($_POST['codigoEstudiante'])) &&
    (isset($_POST['nombreEstudiante'])) && (!empty($_POST['nombreEstudiante'])) &&
    (isset($_POST['correoEstudiante'])) && (!empty($_POST['correoEstudiante'])) &&
    (isset($_POST['notaUno'])) && (!empty($_POST['notaUno'])) &&
    (isset($_POST['notaDos'])) && (!empty($_POST['notaDos'])) &&
    (isset($_POST['notaTres'])) && (!empty($_POST['notaTres'])) ) {

        $codigo=$_POST['codigoEstudiante'];
        $nombre=$_POST['nombreEstudiante'];
        $correo=$_POST['correoEstudiante'];
        $nota1=$_POST['notaUno'];
        $nota2=$_POST['notaDos'];
        $nota3=$_POST['notaTres'];

        $datos = new operacionesCrud();

        $actualizar = $datos->actualizarCalificaciones($codigo,$nombre, $correo, $nota1, $nota2, $nota3);
       

        if($actualizar){

                    $listar = new operacionesCrud();
                    $listaEstudiantes = $listar->obtenerCalificaciones();
                    $vista = "listarCalificaciones.php";                

        }
    }
    
    $vista = "listarCalificaciones.php";
    require "../Vistas/layout.php";

?>