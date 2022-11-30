<?php 
class Venta{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($fk_producto,$fk_usuario){
		$consulta="INSERT INTO venta (pk_venta, fk_producto, fk_usuario) VALUES (null, '{$fk_producto}', '{$fk_usuario}')";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM venta";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_venta){
		$consulta="SELECT * FROM venta WHERE pk_venta='{$pk_venta}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_venta,$fk_producto,$fk_usuario){
		$consulta="UPDATE venta SET fk_producto='{$fk_producto}', fk_usuario='{$fk_usuario}' WHERE pk_venta='{$pk_venta}'";
	}
}
?>

