<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR EMPLEADO</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formularioempleado">
<form action="maneliempleado.php" method="post">
	<table>
		<tr>
			<td>Ingrese id del empleado</td>
			<td><input type="number" name="id"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="BUSCAR" class="btn btn-danger">
</form>
</div>
</center>
</body>
</html>