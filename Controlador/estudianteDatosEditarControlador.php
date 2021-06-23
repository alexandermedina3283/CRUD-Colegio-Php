<?php

$id = $_GET['idEstudiante'];

require('../Modelo/gestionDatos.php');
$datos = new operacionesCrud();
$estudiante = $datos->consultarEstudiante($id); 


foreach($estudiante as $estud){
    $codigo = $estud['Codigo'];
    $nombre = $estud['Nombre'];
    $correo = $estud['Correo'];
    $nota1 = $estud['Nota1'];
    $nota2 = $estud['Nota2'];
    $nota3 = $estud['Nota3'];
}


$vista = "editarEstudiante.php";
require'../Vistas/layout.php';
?>