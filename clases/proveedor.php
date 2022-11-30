<?php 
class Proveedor{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($nombre){
		$consulta="INSERT INTO proveedor (pk_proveedor, nombre,fk_telefono,fk_email,estatus) VALUES (null, '{$nombre}',1,1,1)";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM proveedor WHERE estatus=1";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_proveedor){
		$consulta="SELECT * FROM proveedor WHERE pk_proveedor='{$pk_proveedor}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_proveedor,$nombre,$fk_direccion,$estatus,$fk_telefono,$fk_email){
		$consulta="UPDATE proveedor SET nombre='{$nombre}', fk_telefono='{$fk_telefono}', fk_email='{$fk_email}' WHERE pk_proveedor='{$pk_proveedor}'";
	}
	function baja($pk_proveedor){
		$consulta="UPDATE proveedor SET estatus=0 WHERE pk_proveedor='{$pk_proveedor}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
}
?>

