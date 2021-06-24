<?php

require '../Modelo/gestionDatos.php';

$codigo=$_POST['codigoEstudiante'];

$datos = new operacionesCrud();

$borrar = $datos->eliminarDatosEstudiante($codigo);

$listar = new operacionesCrud();

$listaEstudiantes = $listar->obtenerCalificaciones();

$vista = "listarCalificaciones.php";

require "../Vistas/layout.php";

?>