<?php 
class Promocion{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($imagen){
		$consulta="INSERT INTO promocion (pk_promocion, imagen,estatus) VALUES (null, '{$imagen}',1)";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM promocion WHERE pk_promocion=3";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_promocion){
		$consulta="SELECT * FROM promocion WHERE pk_promocion=3";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_promocion,$imagen){
		$consulta="UPDATE promocion SET imagen='{$imagen}' WHERE pk_promocion='{$pk_promocion}'";
	}
	function baja($pk_promocion){
		$consulta="UPDATE promocion SET estatus=0 WHERE pk_promocion='{$pk_promocion}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
}
?>

