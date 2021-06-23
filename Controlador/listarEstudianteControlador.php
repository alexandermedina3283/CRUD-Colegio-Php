<?php

require '../Modelo/gestionDatos.php';

$datos = new operacionesCrud();

$listaEstudiantes = $datos->obtenerCalificaciones();

$vista = "listarCalificaciones.php";
require "../Vistas/layout.php";


?>