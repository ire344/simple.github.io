<?php 
class Turnos{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($turno){
		$consulta="INSERT INTO turnos (pk_turno, turno) VALUES (null, '{$turno}')";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM turnos";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_turno){
		$consulta="SELECT * FROM turnos WHERE pk_turno='{$pk_turno}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_turno,$turno){
		$consulta="UPDATE turnos SET turno='{$turno}' WHERE pk_turno='{$pk_turno}'";
	}
}
?>

