<?php
session_start();
include("../../clases/usuario.php");

$usuario=new Usuario();

$email=$_POST['email'];
$contraseña=$_POST['contraseña'];

$resultado=$usuario->buscar($email, $contraseña);
$resultado2=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);

if ($resultado2==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../../sesion.html'> <script> alert('Correo o contraseña incorrectos.') </script>";
}else{
	$_SESSION['pk_usuario']=$datos['pk_usuario'];
	$_SESSION['email']=$email;
	$_SESSION['tipo_usuario']=$datos['tipo_usuario'];
	echo "<meta http-equiv='REFRESH' content='0; url=../../index_u.php'>";
}

?>