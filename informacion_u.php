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
			.img4 {
			  object-fit: fill;
			  width: 900px;
			  height: 900px;
			  border-radius: 12px;
			}
			.img2 {
			  object-fit: cover;
			  width: 230px;
			  height: 230px;
			  border-radius: 100%;
			}
			.img3 {
			  object-fit: fill;
			  width: 350px;
			  height: 350px;
			  border-radius: 12px;
			}
			h3{
				font-family: "Comfortaa", cursive;
				font-size: 35px;
				color: black;
			}
			h6{
				font-family: "Comfortaa", cursive;
				font-size: 30px;
				color: hotpink;
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


		<?php 	
		include("header_u.php");
		 ?>

		
		<br>



		<center>
		<div>
			<h3>Horario</h3>
				
			<br>
				<div style="display:flex;">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<?php 
						include ("clases/horario.php");
						$horario=new Horario();
						$resultados=$horario->mostrar();
						while ($arti=mysqli_fetch_array($resultados)) {
					?>
					<img href="horario.php?horario=<?=$arti['pk_horario']?>">
					<div class="cuadro">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<img class="img4" src="<?=$arti['imagen']?>">
					</div>			
							<br><br>
							
				</div>
			<?php 
				}
			?>
			
		</div>
		</center>
			<br><br><br><br><br>



		

		
		<div style="display: flex;">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		


			<?php 
				include ("clases/empleado.php");
				$empleado=new Empleado();
				$resultados=$empleado->mostrar();
				while ($arti=mysqli_fetch_array($resultados)) {
			?>
				<h6 href="empleado.php?empleado=<?=$arti['pk_empleado']?>">

					<div class="table">
						<figure>
							<div>
							<center >
							<img class="img2" src="<?=$arti['foto']?>">
							<h3><?=$arti['nombre_ap']?></h3>
							<?php
						      if ($_SESSION['tipo_usuario']==2) {
						     ?>
						     <h3><?=$arti['numero']?></h3>
						     <?php
					          }
					    	?>
							<br><br>
							</center>
							</div>
						</figure>
					</div>
					
				</h6>
			<?php 
				}
			?>
			<br>
		</div>	
		
		<?php
		      if ($_SESSION['tipo_usuario']==2) {
		     ?>
				<form action="funciones/insertar/insertar_empleado.php" method="post" enctype="multipart/form-data" class="container">
		<h6>Espacio para registrar nuevo empleado.</h6>
		<br><br>

		<h6>Nombres</h6>
		<input required type="text" name="nombre_ap" class="form-control form-control-lg" placeholder="Usa letras." data-validation-required-message="Por favor inserte un nombre."/>
		<br>
		<h6>Numero</h6>
		<input required type="number" name="numero" class="form-control form-control-lg" placeholder="Usa numeros." data-validation-required-message="Por favor inserte un numero."/>
		<br>
		<h6>Foto</h6>
		<input type="file" name="foto" class="form-control form-control-lg" placeholder="Usa numeros." data-validation-required-message="Por favor inserte un numero."/>
		<br>


		
		<br>

		<a href="informacion_u.php"><button type="submit" class="button button" style="margin: 5px">Registrar</button></a>

		</form>
				<?php
		          }
		    	?>
		</div>
		<br><br><br>
		<div style="display:flex;"> 

			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<center>
		<h3>Ubicación</h3>
		<img class="img3" src="img/mapa.jpg">
		<br><br>
		</center>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<center>
			<br>
		<h3>Proveedores</h3>
		<br>
		<?php 
				include ("clases/proveedor.php");
				$proveedor=new Proveedor();
				$resultados=$proveedor->mostrar();
			while ($arti=mysqli_fetch_array($resultados)) {
		?>
			<h6 href="proveedor.php?proveedor=<?=$arti['pk_proveedor']?>">
				<div class="cuadro">
					<figure>
						<div style="display:flex;">
						<center>
						<h3>💗<?=$arti['nombre']?></h3>
						</center>
						</div>
					</figure>
				</div>
			</h6>
		<?php 
			}
		?>
		<br><br>
		</center>
		</div>

<br><br>

	</nav>
	<div>	
		<?php
		      if ($_SESSION['tipo_usuario']==2) {
		     ?>
				<form action="funciones/insertar/insertar_proveedor.php" method="post" enctype="multipart/form-data" class="container">
		<h6>Espacio para registrar nuevo proveedor.</h6>
		<br><br>

		<h6>Nombres</h6>
		<input required type="text" name="nombre" class="form-control form-control-lg" placeholder="Usa letras." data-validation-required-message="Por favor inserte un nombre."/>
		


		
		<br>

		<a href="informacion_u.php"><button type="submit" class="button button" style="margin: 5px">Registrar</button></a>

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