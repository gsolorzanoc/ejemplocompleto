<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZACION DE MARCAS</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formulariomarca">
<form action="manactmarca.php" method="post">
	<table>
		<tr>
			<td>Ingrese id de la marca</td>
			<td><input type="text" name="id"></td>
			<td>Ingrese nombre de la marca</td>
			<td><input type="text" name="nom"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="ACTUALIZAR" class="btn btn-success">
</form>
</div>
</center>
</body>
</html>