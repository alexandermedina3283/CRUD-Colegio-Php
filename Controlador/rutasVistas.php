<?php

class enrutamiento{

    public function Ruta($i){

        switch($i){

            case 1:
                $v="home.php";
                break;
            case 2:
                $v="crearEstudiante.php";
                break;                                    
            default:
                $v="home.php";
                break;
        }

        return $v;
    
    }

}

?>