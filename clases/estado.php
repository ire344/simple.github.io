<?php 
class Estado{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($nombre){
		$consulta="INSERT INTO estado (pk_estado, nombre) VALUES (null, '{$nombre}')";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM estado";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_estado){
		$consulta="SELECT * FROM estado WHERE pk_estado='{$pk_estado}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_estado,$nombre){
		$consulta="UPDATE estado SET nombre='{$nombre}' WHERE pk_estado='{$pk_estado}'";
	}
}
?>

