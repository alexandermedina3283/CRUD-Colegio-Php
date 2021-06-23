<?php error_reporting (0);?>

<?php

require 'conexion.php';

class operacionesCrud extends Conexion {

    public function __construct() {
        parent::__construct();
    }

    public function registroCalificacion($nombre, $correo, $nota1, $nota2, $nota3){

        $sql = "insert into estudiante (Nombre, Correo, Nota1, Nota2, Nota3) values('".$nombre."','".$correo."','".$nota1."','".$nota2."','".$nota3."')";
        $resultado = $this->conexion->query($sql);
        if($resultado){
            $this->conexion->close();
            return true;
        }else{
            $this->conexion->close();
            return false;
        }
    }

    public function obtenerCalificaciones(){


        $consulta= $this->conexion->query('select * from estudiante');
        $resultado= $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function consultarEstudiante($codigo) {
        $consulta=$this->conexion->query("select * from estudiante where Codigo = '".$codigo."'");
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function actualizarCalificaciones($codigo, $nombre, $correo, $nota1, $nota2, $nota3){
        $sql = "update estudiante set Nombre = '".$nombre."', Correo = '".$correo."', Nota1 = '".$nota1."', Nota2 = '".$nota2."', Nota3 = '".$nota3."' where Codigo = '".$codigo."' ";

        $resultado = $this->conexion->query($sql);
        if ($resultado){
            $this->conexion->close();
            return true;
        }else {
            $this->conexion->close();
            return false;
        }
    }





}

?>