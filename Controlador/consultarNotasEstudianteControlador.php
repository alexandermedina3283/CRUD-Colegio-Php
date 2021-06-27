
<?php

require('../Modelo/gestionDatos.php');



            $datos = new operacionesCrud();
            $usuarioInfo = $datos->usuarioLogeado($correoEstud);
            var_dump($usuarioInfo)            


            $correoEstud=$_SESSION['CorreoUsuario'];
            $datos1 = new operacionesCrud();
            $usuarioInfo = $datos1->usuarioLogeado($correo);   

            foreach($usuarioInfo as $info){

                $nombreUsuario = $info['Nombre'];
                $correoUsuario = $info['Correo'];
                $rolUsuario = $info['Rol'];
                $notauno = $info['Nota1'];
                $notados = $info['Nota2'];
                $notatres = $info['Nota3'];
                
                
            } 
            $_SESSION['NombreUsuario'] = $nombreUsuario;
            $_SESSION['CorreoUsuario'] = $correoUsuario;
            $_SESSION['RolUsuario'] = $rolUsuario;
            $_SESSION['Nota1Estudiante'] = $notauno;
            $_SESSION['Nota2Estudiante'] = $notados;
            $_SESSION['Nota3Estudiante'] = $notatres;

            $vista = "consultarNotasEstudiante.php";
        }
                 
        
         
            require'../Vistas/layout.php';
?>