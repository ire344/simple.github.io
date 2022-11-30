<?php 
class Horario{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($imagen,$estatus){
		$consulta="INSERT INTO horario (pk_horario, imagen,estatus) VALUES (null, '{$imagen}',1)";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM horario WHERE estatus=1";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_horario){
		$consulta="SELECT * FROM horario WHERE pk_horario='{$pk_horario}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_horario,$imagen){
		$consulta="UPDATE horario SET imagen='{$imagen}' WHERE pk_horario='{$pk_horario}'";
	}
	function baja($pk_horario){
		$consulta="UPDATE horario SET estatus=0 WHERE pk_horario='{$pk_horario}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
}
?>

