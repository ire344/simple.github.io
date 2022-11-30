<?php 
include ("../clases/promocion.php");
$promocion=new Promocion();
$id=$_GET["promocion"];
$respuesta=$promocion->mostrarPorId($pk_promocion);
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
		<img src="<?=$datos['imagen']?>">
	</div>
</body>
</html>