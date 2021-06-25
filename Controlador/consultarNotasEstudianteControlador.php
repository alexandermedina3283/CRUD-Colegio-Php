
<?php

require '../Modelo/gestionDatos.php';

$datos = new operacionesCrud();

$listaEstudiantes = $datos->obtenerCalificaciones();

$vista = "consultarNotasEstudiante.php";
require "../Vistas/layout.php";


?>