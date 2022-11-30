<?php 
class Telefono{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($ruta_doc, $dato,$estatus){
		$consulta="INSERT INTO telefono (pk_telefono, ruta_doc,dato,estatus) VALUES (null, '{$ruta_doc}','{$dato}',1)";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM telefono WHERE estatus=1";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_telefono){
		$consulta="SELECT * FROM telefono WHERE pk_telefono='{$pk_telefono}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_telefono,$ruta_doc,$dato){
		$consulta="UPDATE telefono SET ruta_doc='{$ruta_doc}',dato='{$dato}' WHERE pk_telefono='{$pk_telefono}'";
	}
	function baja($pk_telefono){
		$consulta="UPDATE telefono SET estatus=0 WHERE pk_telefono='{$pk_telefono}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
}
?>

