<?php 
include("header.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<nav>
		
		<br><br><br>


		<div>
		<center>
		<div class="rectangle">
			<br>
		<div style="display: flex;">	
		<br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php 
				include ("clases/promocion.php");
				$promocion=new Promocion();
				$resultados=$promocion->mostrar();
			while ($arti=mysqli_fetch_array($resultados)) {
		?>
			<img href="promocion.php?promocion=<?=$arti['pk_promocion']?>">
				<div class="cuadro">
					<figure>
						<div style="display:flex;">
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img class="border" alt="centered image" height="598" width="398" src="<?=$arti['imagen']?>">
						</div>
					</figure>
				</div>
			</img>
		<?php 
			}
		?>
		

		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<div align="center" style="display: table;">
			<br>
		<br>
		<h6 style="margin: 30px;">Promoción del día:</h6>
		<br>
		<br>
		<?php 
		include ("clases/producto_p.php");
		$producto_p=new Producto_p();
		$resultados=$producto_p->mostrar();
			while ($arti=mysqli_fetch_array($resultados)) {
		?>
			<h6 href="producto_p.php?producto_p=<?=$arti['pk_producto']?>">
				<div class="cuadro">
					<figure>
						<div style="display:flex;">
						<center>
						<h6><?=$arti['nombre']?></h6>
						<br>
						<h6><?=$arti['descripcion']?></h6>
						<br>
						<h6>$<?=$arti['precio']?></h6>
						<br>
						<br>
						<a href="sesion.html"><button class="button button4">Carrito</button></a>
						<a href="sesion.html"><button class="button button4">Compra</button></a>
						</center>
						</div>
						&nbsp&nbsp&nbsp&nbsp
					</figure>
				</div>
			</h6>
		<?php 
			}
		?>
		</div>
		</div>
		</div>
		</div>




		<br><br>
		</div>
		</center>
		<br>


		


		<?php 
		include("footer.html");
		 ?>


</body>
</html>