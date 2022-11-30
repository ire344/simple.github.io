<?php 
class Producto_p{
	
	function __construct(){
		require_once("conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($nombre,$precio,$descripcion,$imagen,$fk_promocion){
		$consulta="INSERT INTO producto (pk_producto, nombre, precio, descripcion,imagen,fk_promocion) VALUES (null, '{$nombre}', '{$precio}','{$descripcion}','{$imagen}','{$fk_promocion}')";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM producto WHERE pk_producto=2";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_producto){
		$consulta="SELECT * FROM producto WHERE pk_producto=2";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_producto,$nombre,$precio,$descripcion,$imagen,$fk_promocion){
		$consulta="UPDATE producto SET nombre='{$nombre}', precio='{$precio}',descripcion='{$descripcion}',imagen='{$imagen}', fk_promocion='{$fk_promocion}' WHERE pk_producto='{$pk_producto}'";
	}
}
?>

