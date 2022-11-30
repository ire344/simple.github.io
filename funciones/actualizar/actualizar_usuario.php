<?php 
include("../clases/usuario.php");
$usuario=new Usuario();

$pk_usuario=$_POST['pk_usuario'];
$nombre=$_POST["nombre"];
$nombre_usuario=$_POST["nombre_usuario"];
$email=$_POST["email"];
$contraseña=$_POST["contraseña"];
$perfil=$_POST["perfil"];
$tipo_usuario=$_POST["tipo_usuario"];
$fk_tarjeta=$_POST["fk_tarjeta"];
$fk_direccion=$_POST["fk_direccion"];

$respuesta=$usuario->actualizar($pk_usuario,$nombre,$nombre_usuario,$email,$contraseña,$perfil,$tipo_usuario,$fk_tarjeta,$fk_direccion);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>