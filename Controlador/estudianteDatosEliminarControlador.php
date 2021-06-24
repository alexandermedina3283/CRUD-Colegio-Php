<?php

$id = $_GET['idEstudiante'];

require('../Modelo/gestionDatos.php');
$datos = new operacionesCrud();
$estudiante = $datos->consultarEstudiante($id); 
$vista = "eliminarEstudiante.php";
require'../Vistas/layout.php';
?>