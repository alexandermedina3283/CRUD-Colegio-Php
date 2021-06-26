<?php

require '../Modelo/gestionDatos.php';

if( (isset($_POST['correoUsuario'])) && (!empty($_POST['correoUsuario'])) &&
    (isset($_POST['contrasena'])) && (!empty($_POST['contrasena'])) ) {

        $usuario=$_POST['correoUsuario'];
        $clave=$_POST['contrasena'];        

        $datos = new operacionesCrud();
        $validar = $datos->validarUsuario($usuario, $clave);       

        if($validar){            
                             
                      
            // $logeado=$datos->usuarioLogeado($usuario);  
            // echo "<prev>";
            // echo var_dump();
            // echo "<prev>";
            
            
            $vista = "nosotros.php";  
            
        }else{

            $vista = "formularioLogin.php";            
        }
    }

    require "../Vistas/layout.php"


?>




