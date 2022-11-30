<?php 
class Usuario{
	
	function __construct(){
		require_once("Conexion.php");
		$this->conexion = new Conexion();
	}
	function insertar($nombre,$nombre_usuario,$email,$contraseña,$tarjeta,$direccion){
		$consulta="INSERT INTO usuario (pk_usuario, nombre, nombre_usuario,email,contraseña,perfil,tipo_usuario,tarjeta,direccion) VALUES (null, '{$nombre}', '{$nombre_usuario}','{$email}','{$contraseña}',null,1,'{$tarjeta}','{$direccion}')";
		$resultado=$this->conexion->query($consulta); //esto indica de donde se obtiene la info
		return $this->conexion->insert_id; //esta funcion regresa el resultado
	}
	function mostrar(){
		$consulta="SELECT * FROM usuario";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function mostrarPorId($pk_usuario){
		$consulta="SELECT * FROM usuario WHERE pk_usuario='{$pk_usuario}'";
		$resultado=$this->conexion->query($consulta); 
		return $resultado;
	}
	function buscar($email,$contraseña){
    $consulta="SELECT * FROM usuario WHERE email='{$email}' AND contraseña='{$contraseña}' ";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  	}
	function actualizar($pk_usuario,$nombre,$nombre_usuario,$email,$contraseña,$perfil,$tipo_usuario,$tarjeta,$direccion){
		$consulta="UPDATE usuario SET nombre='{$nombre}', nombre_usuario='{$nombre_usuario}', email='{$email}', contraseña='{$contraseña}', perfil='{$perfil}', tipo_usuario='{$tipo_usuario}', tarjeta='{$tarjeta}',direccion='{$direccion}' WHERE pk_usuario='{$pk_usuario}'";
	}
	function baja($pk_usuario){
		$consulta="UPDATE usuario SET estatus=0 WHERE pk_usuario='{$pk_usuario}'";
		$resultado=$this->conexion->query($consulta);		
		return $resultado;
	}
}
?>