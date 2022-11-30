<?php 
class Empleado{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($nombre_ap, $numero,$foto){
		$consulta="INSERT INTO empleado (pk_empleado, nombre_ap,numero,foto,fk_referencias,fk_turno,estatus) VALUES (null, '{$nombre_ap}','{$numero}','{$foto}',1,1,1)";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM empleado WHERE estatus=1";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_empleado){
		$consulta="SELECT * FROM empleado WHERE pk_empleado='{$pk_empleado}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_empleado,$nombre_ap,$numero,$foto,$fk_direccion,$fk_referencias,$fk_turno){
		$consulta="UPDATE empleado SET nombre_ap='{$nombre_ap}',numero='{$numero}',foto='{$foto}',fk_referencias='{$fk_referencias}' fk_turno='{$fk_turno}' WHERE pk_empleado='{$pk_empleado}'";
	}
	function baja($pk_empleado){
		$consulta="UPDATE empleado SET estatus=0 WHERE pk_empleado='{$pk_empleado}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
}
?>

