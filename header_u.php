<?php
session_start();

if (!isset($_SESSION['pk_usuario'])) {
  header("location: formulario_inicio_sesion.php");
}
?>
<!DOCTYPE html>
<html>
<head>

	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Bubble Tea</title>
	<link href="img/bubble.png" rel="icon">


</head>
<body>
	<nav>


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
				margin-right: 10;
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
			h6{
				font-family: "Comfortaa", cursive;
				font-size: 30px;
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
				margin-left: 100%;
			}
		</style>


		<header>
			<ul>
			<nav class="navbar navbar-expand-lg">
			<div class="header">
			  <a href="index_u.php"><img src="img/bubble.png" width="60px" align="left" style="margin: 10px"></a>
				<a href="productos_u.php"><button class="button button" style="margin: 25px">Productos</button></a>
				<a href="informacion_u.php"><button class="button button" style="margin: 25px">Información</button></a>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<?php
		      if ($_SESSION['tipo_usuario']==1) {
		     ?>
				<a href="funciones/validar_sesión/cerrar_sesion.php"><button class="button button" style="margin-left: 850px; background-color: #B8E8FC;">Salir</button></a>
				<a href="productos_uc.php"><img src="img/carrito.png" class="img1"></a>
				<?php
		          }
		    	?>

		    	<?php
		      if ($_SESSION['tipo_usuario']==2) {
		     ?>
				<a href="funciones/validar_sesión/cerrar_sesion.php"><button class="button button" style="margin-left: 850px; background-color: #B8E8FC;">Salir</button></a>
				<a href="panel_a.php"><img src="img/searchicon.png" class="img1"></a>
				<?php
		          }
		    	?>

				
		        
				</div>
			
			</nav>
			</ul>
		</header>

		
		<br><br><br>


	</nav>


</body>
</html>