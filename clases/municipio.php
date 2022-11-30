<?php 
class Municipio{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($nombre,$fk_estado){
		$consulta="INSERT INTO municipio (pk_municipio, nombre, fk_estado) VALUES (null, '{$nombre}', '{$fk_estado}')";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM municipio";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_municipio){
		$consulta="SELECT * FROM municipio WHERE pk_municipio='{$pk_municipio}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_municipio,$nombre,$fk_estado){
		$consulta="UPDATE municipio SET nombre='{$nombre}', fk_estado='{$fk_estado}' WHERE pk_municipio='{$pk_municipio}'";
	}
}
?>