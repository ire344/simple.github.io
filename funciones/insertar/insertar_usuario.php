	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
			.header {
			  padding: 5px;
			  text-align: center;
			  background: #FDFDBD;
			  color: black;
			  font-size: 30px;
			  font-family: "Comfortaa", cursive;
			  margin: 200;
			  padding: 20;
			}
			.footer{
			  padding: 1px;
			  text-align: center;
			  background: white;
			  color: black;
			  font-size: 30px;
			  font-family: "Comfortaa", cursive;
			}
			.rectangle {
			  padding: 2px;
			  text-align: center;
			  background: #B8E8FC;
			}
			.button4 {
				border-radius: 12px;
				border-color: transparent;
				padding: 20px;
				margin: 30px;
				font-size: 20px;
				font-family: "Comfortaa", cursive;
				background-color: #FBBBE2;
			}
			.button {
				border-radius: 12px;
				border-color: transparent;
				padding: 10px;
				font-size: 20px;
				font-family: "Comfortaa", cursive;
				background-color: #FBBBE2;
				
			}
			.border {
				border-radius: 12px;
			}
			.div1{
				margin: ;
			}
			.img1{
				width: 80px; 
				margin: ;
			}
			h1{
				font-family: "Comfortaa", cursive;
				margin-left: 2%;
				color: black;
			}
			p{
				font-family: "Comfortaa", cursive;
				font-size: 20px;
				color: black;
			}
			ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  background-color: #FDFDBD;
			}
			li {
			  display: inline;
			  padding: 200px;
			}
			button{
				margin-left: 2%;
			}
	</style>
<?php 
include("../../clases/usuario.php");
$usuario=new Usuario();

$nombre=$_POST["nombre"];
$nombre_usuario=$_POST["nombre_usuario"];
$email=$_POST["email"];
$contraseña=$_POST["contraseña"];
$tarjeta=$_POST["tarjeta"];
$direccion=$_POST["direccion"];



$respuesta=$usuario->insertar($nombre,$nombre_usuario,$email,$contraseña,$tarjeta,$direccion);

if ($respuesta==true) {
	echo "";
}else{
	echo "Error";
}

 ?>
 <br><br>
<h1>Gracias por registrarte!</h1>
<br><br>
<a href="../../sesion.html"><button class="button button">Inicia sesión</button></a>