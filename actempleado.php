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
<div class="formularioempleado">
<form action="manactempleado.php" method="post">
	<table>
		<tr>
			<td>Ingrese id del empleado</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Ingrese nombre del empleado</td>
			<td><input type="text" name="nom"></td>
		</tr>
		<tr>
			<td>Ingrese puesto del empleado</td>
			<td><input type="text" name="pue"></td>
		</tr>
		<tr>
			<td>Ingrese sueldo del empleado</td>
			<td><input type="number" name="sue"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="ACTUALIZAR" class="btn btn-success">
</form>
</div>
</center>
</body>
</html>