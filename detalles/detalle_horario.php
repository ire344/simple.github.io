<?php 
include ("../clases/horario.php");
$horario=new Horario();
$id=$_GET["horario"];
$respuesta=$horario->mostrarPorId($pk_horario);
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