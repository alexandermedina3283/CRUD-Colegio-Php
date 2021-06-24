<?php

require '../Modelo/gestionDatos.php';

$datos = new operacionesCrud();

$listaEstudiantes = $datos->obtenerCalificaciones();

$vista = "listarCalificacionesProfesor.php";
require "../Vistas/layout.php";


?>