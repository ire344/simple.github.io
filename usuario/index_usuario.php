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
			  padding: 1px;
			  text-align: center;
			  background: #FDFDBD;
			  color: black;
			  font-size: 30px;
			  font-family: "Comfortaa", cursive;
			  margin: 200;
			  padding: 30;
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
			  	<img src="img/bubble.png" width="70px" align="left" style="margin: 20px">
			  	&nbsp&nbsp
				<li><a href="productos.php" style="color: black;">Productos</a></li>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<li><a href="informacion.php" style="color: black;">Información</a></li>
				<li><a href="usuario.html" class="button button" style="margin: 25px; color:black;">Ver perfil</a></li>
			</div>
			</nav>
			</ul>
		</header>

		
		<br><br><br>

		<?php 
				include ("../clases/usuario.php");
				$usuario=new Usuario();
				$resultados=$usuario->mostrar();
			while ($arti=mysqli_fetch_array($resultados)) {
		?>
			<h6 href="usuario.php?usuario=<?=$arti['pk_usuario']?>">
				<div class="cuadro">
					<figure>
						<div style="display:flex;">
							<h6>Bienvenid@ <?=$arti['nombre']?> !</h6>
						</div>
					</figure>
				</div>
			</h6>
		<?php 
			}
		?>


		<div>
		<center>
		<div class="rectangle">
		<br>
		<?php 
				include ("../clases/promocion.php");
				$promocion=new Promocion();
				$resultados=$promocion->mostrar();
			while ($arti=mysqli_fetch_array($resultados)) {
		?>
			<a href="promocion.php?promocion=<?=$arti['pk_promocion']?>">
				<div class="cuadro">
					<figure>
						<div style="display:flex;">
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img class="border" alt="centered image" height="598" width="398" src="<?=$arti['imagen']?>">
						</div>
					</figure>
				</div>
			</a>
		<?php 
			}
		?>

		<br><br>
		</div>
		</center>
		<br>
		<div align="">
		<h6 style="margin: 30px;">Promoción del día:</h6>

		<?php 
		include ("../clases/producto_p.php");
		$producto_p=new Producto_p();
		$resultados=$producto_p->mostrar();
			while ($arti=mysqli_fetch_array($resultados)) {
		?>
			<a href="producto_p.php?producto_p=<?=$arti['pk_producto']?>">
				<div class="cuadro">
					<figure>
						<div style="display:flex;">
						<center>
						<h6><?=$arti['nombre']?></h6>
						<h6><?=$arti['descripcion']?></h6>
						<h6><?=$arti['precio']?></h6>
						<button class="button button4">Carrito</button>
						<button class="button button4">Compra</button>
						</center>
						</div>
						&nbsp&nbsp&nbsp&nbsp
					</figure>
				</div>
			</a>
		<?php 
			}
		?>
		

		</div>
		</div>


		<br>
		<br>
		<br>


	</nav>


	<footer class="footer">
	  <a href="index.php"><img align="center" src="img/bubble.png" width="100px" align="center"></a>
	  <br><br>
	  <p>
	  Bubble Tea®<br><br> BubbleTea@email.com </p>
	  <a href="https://www.facebook.com/bubble-8392823/" style="color: black"><i class="fa fa-facebook tama"></i></a>
	  &nbsp
	  <a href="https://twitter.com/bubble" style="color: black"><i class="fa fa-twitter tama"></i></a>
	  &nbsp
	  <a href="https://www.instagram.com/bubble/" style="color: black"><i class="fa fa-instagram tama"></i></a>
	</footer>


</body>
</html>