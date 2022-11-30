<?php 
include ("../clases/producto.php");
$producto=new Producto();
$id=$_GET["producto"];
$respuesta=$producto->mostrarPorId($pk_producto);
$datos=mysqli_fetch_assoc($respuesta);
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	img{
		width: 200px;
		height: 300px;
	}
</style>
<body>
	<div>
		<h1>Detalles del producto</h1>
		<h2><?=$datos['nombre']?></h2>
		<img src="<?=$datos['imagen']?>">
		<h4><?=$datos['descripcion']?></h4>
		<h3><?=$datos['precio']?></h3>
	</div>
</body>
</html>