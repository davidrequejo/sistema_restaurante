<?php
require '../config/conexion.php';

Class MVentas{

	public function __construct(){

	}

	public function listar_salas(){
		$sql=" SELECT id_sala,nombre,estado FROM sala WHERE estado='0' ORDER BY id_sala ASC ";
		return ejecutarConsulta($sql);
	}

	public function listar_mesas($id_sala){
		$sql="SELECT M.nombre,M.id_mesa,s.nombre AS sala 
		FROM mesa AS m JOIN sala AS s ON M.id_sala=s.id_sala 
		WHERE s.id_sala='$id_sala'  ORDER BY id_mesa ASC";
		return ejecutarConsulta($sql);
	}

}
?>
