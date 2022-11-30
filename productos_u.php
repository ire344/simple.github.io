	<?php
	include ("clases/conexion.php");
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
				font-size: 10px;
				color: black;
			}
			h3{
				font-family: "Comfortaa", cursive;
				font-size: 10px;
				color: black;
			}
			.img2 {
			  object-fit: cover;
			  width: 230px;
			  height: 230px;
			  border-radius: 12px;
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
			.wrapper {
			  display: grid;
			  grid-template-columns: repeat(3, 1fr);
			  grid-gap: 1px;
			  justify-content: center;

			}
		</style>


		<?php 	
		include("header_u.php");
		 ?>

		
		<br>
		




			<nav>

			<div class="wrapper">

			<?php 
			include ("clases/producto.php");
			$producto=new Producto();
			$resultados=$producto->mostrar();
				while ($arti=mysqli_fetch_array($resultados)) {
			?>

				<div href="producto.php?producto=<?=$arti['pk_producto']?>">
					<div class="cuadro">

						<figure>

							<div class="wrapper" >
							<center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<h3><?=$arti['nombre']?></h3>
							<img class="img2" src="<?=$arti['imagen']?>">
							<br><br>
							<h6><?=$arti['descripcion']?></h6>
							<br>
							<h6>$<?=$arti['precio']?></h6>
							<br>
							<?php
						      if ($_SESSION['tipo_usuario']==1) {
						     ?>
							<button onclick="alert('Agregado al carrito! 🛒');" class="button button4">Carrito</button>
							<a href="compra.php"><button class="button button4">Compra</button></a>
							<?php
					          }
					    	?>
							</center>
							</div>
						</figure>
						<br><br><br>

					</div>
				</div>
			<?php 
				}
			?>
			
			</nav>


	</nav>


	<div>	
		<?php
		      if ($_SESSION['tipo_usuario']==2) {
		     ?>
				<form action="funciones/insertar/insertar_producto.php" method="post" enctype="multipart/form-data" class="container">
		<h6>Espacio para registrar más productos.</h6>
		<br><br>
		<h6>Nombre</h6>
		<input required type="text" name="nombre" class="form-control form-control-lg" placeholder="Solo letras." data-validation-required-message="Por favor inserte el nombre."/>
		<br>

		<h6>Precio</h6>
		<input required type="decimal" name="precio" class="form-control form-control-lg" placeholder="Usa numeros decimales." data-validation-required-message="Por favor inserte su precio."/>
		<br>



		<h6>Descripción</h6>
		<input required type="text" name="descripcion" class="form-control form-control-lg" placeholder="Solo letras." data-validation-required-message="Por favor inserte su descripción."/>
		<br>

		<h6>Imagen</h6>
		<input type="file" name="imagen" class="form-control form-control-lg" placeholder="Usa caracteres variados." data-validation-required-message="Por favor inserte una imagen."/>
		<br>

		<h6>Promoción</h6>
		<input type="number" name="fk_promocion" class="form-control form-control-lg" placeholder="Usa numeros."/>
		<br>

		
		<br>

		<a href="productos_u.php"><button type="submit" class="button button" style="margin: 5px">Registrar</button></a>

		</form>
				<?php
		          }
		    	?>
	</div>


	<?php 	
		include("footer_u.html");
	?>


</body>
</html>