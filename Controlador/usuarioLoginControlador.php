<?php error_reporting (0);?>

<?php

session_start();

require '../Modelo/gestionDatos.php';

if( (isset($_POST['correoUsuario'])) && (!empty($_POST['correoUsuario'])) &&
    (isset($_POST['contrasena'])) && (!empty($_POST['contrasena'])) ) {

        $usuario=$_POST['correoUsuario'];
        $clave=$_POST['contrasena'];        

        $datos = new operacionesCrud();
        $validar = $datos->validarUsuario($usuario, $clave);       

        if($validar){

            
            $correo=$_POST['correoUsuario'];
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

            $vista ="nosotros.php";
            

        }else{
            $ErrorCodigo = "Error en el usuario y/o contraseña";
            $vista = "formularioLogin.php";
        }
    }       
    
    

    require "../Vistas/layout.php"


?>




