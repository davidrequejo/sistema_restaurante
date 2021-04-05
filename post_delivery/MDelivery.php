<?php
    require '../config/conexion.php';

    Class MDelivery{

        public function __construct(){

        }

        public function listar_salas(){
            $sql="SELECT * FROM sala ORDER BY id_sala";
            return ejecutarConsulta($sql);
        }

        public function listar_mesas($id_sala){
            $sql="SELECT * FROM mesa WHERE id_sala ='$id_sala' ORDER BY id_mesa";
            return ejecutarConsulta($sql);
        }

        public function insertar($titulo,$foto){
            $sql="INSERT INTO carousel (titulo,foto,estado) VALUES ('$titulo','$foto','0')";
            return ejecutarConsulta($sql);
        }

        public function editar($idcarousel,$titulo,$foto){
            $sql="UPDATE carousel SET titulo='$titulo',foto='$foto' WHERE idcarousel='$idcarousel'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($id_pedido){
            $sql="SELECT * FROM categoria WHERE id_categoria ='$id_pedido'";
            return ejecutarConsultaSimpleFila($sql);
        }

        

        public function eliminar($idcarousel){
            $sql = "DELETE FROM carousel WHERE idcarousel = '$idcarousel'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($idcarousel){
            $sql = "UPDATE carousel SET estado='1' WHERE idcarousel = '$idcarousel'";
            return ejecutarConsulta($sql);
        }

        public function activar($idcarousel){
            $sql = "UPDATE carousel SET estado='0' WHERE idcarousel = '$idcarousel'";
            return ejecutarConsulta($sql);
        }
    }
?>
