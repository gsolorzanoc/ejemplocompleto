<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR PRODUCTO</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formularioproducto">
<form action="maneliproducto.php" method="post">
	<table>
		<tr>
			<td>Ingrese id del producto</td>
			<td><input type="number" name="id"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="BUSCAR" class="btn btn-danger">
</form>
</div>
</center>
</body>
</html>