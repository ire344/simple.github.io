<?php 
class Email{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($dato, $estatus){
		$consulta="INSERT INTO email (pk_email, dato,estatus) VALUES (null, '{$dato}',1)";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM email WHERE estatus=1";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_email){
		$consulta="SELECT * FROM email WHERE pk_email='{$pk_email}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function actualizar($pk_email,$dato){
		$consulta="UPDATE email SET dato='{$dato}' WHERE pk_email='{$pk_email}'";
	}
	function baja($pk_email){
		$consulta="UPDATE email SET estatus=0 WHERE pk_email='{$pk_email}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
}
?>

