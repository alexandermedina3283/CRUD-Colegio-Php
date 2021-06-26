<?php

class enrutamiento{

    public function Ruta($i){

        switch($i){

            case 1:
                $v="home.php";
                break;
            case 2:
                $v="nosotros.php";
                break;  
            case 3:
                $v="crearEstudiante.php";
                break;
            case 4:
                $v="formularioLogin.php";
                break;
            default:
                $v="home.php";
                break;
        }

        return $v;
    
    }

}

?>