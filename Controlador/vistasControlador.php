<?php

require "rutasVistas.php";
$enrutar = new enrutamiento();

if(isset($_GET['rutaOpc']))
    $vista = $enrutar ->Ruta($_GET['rutaOpc']);

require "../Vistas/layout.php"

?>