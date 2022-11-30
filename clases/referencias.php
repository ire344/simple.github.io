<?php 
class Referencias{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($empresa,$documento,$fk_telefono){
		$consulta="INSERT INTO referencias (pk_referencias, empresa, documento,fk_telefono) VALUES (null, '{$empresa}', '{$documento}','{$fk_telefono}')";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM referencias";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_referencias){
		$consulta="SELECT * FROM referencias WHERE pk_referencias='{$pk_referencias}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_referencias,$empresa,$documento,$fk_telefono,$fk_direccion){
		$consulta="UPDATE referencias SET empresa='{$empresa}', documento='{$documento}',fk_telefono='{$fk_telefono}' WHERE pk_referencias='{$pk_referencias}'";
	}
}
?>

