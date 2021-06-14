<!DOCTYPE html>
<html>
<head>
	<title>BUSCAR EMPLEADO</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formularioempleado">
<form action="manbusempleado.php" method="post">
	<table>
		<tr>
			<td>Ingrese id del Empleado</td>
			<td><input type="number" name="id"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="BUSCAR" class="btn btn-warning">
</form>
</div>
</center>
</body>
</html>