<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZACION DE EMPLEADO</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formularioproducto">
<form action="manactproducto.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Ingrese id del producto</td>
			<td><input type="number" name="id"></td>
		</tr>
		<tr>
			<td>Ingrese nombre del producto</td>
			<td><input type="text" name="nom"></td>
		</tr>
		<tr>
			<td>Ingrese precio del producto</td>
			<td><input type="text" name="pre"></td>
		</tr>
		<tr>
			<td>Ingrese descripcion del producto</td>
			<td><input type="text" name="des"></td>
		</tr>
		<tr>
			<td>Ingrese marca del producto</td>
			<td><input type="number" name="mar"></td>
		</tr>
		<tr>
			<td>Ingrese imagen del producto</td>
			<td><input type="file" name="foto"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="ACTUALIZAR" class="btn btn-success">
</form>
</div>
</center>
</body>
</html>