<!DOCTYPE html>
<html>
<head>
	<title>BUSCAR PRODUCTO</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formularioproducto">
<form action="manbusproducto.php" method="post">
	<table>
		<tr>
			<td>Ingrese id del nombre</td>
			<td><input type="number" name="id"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="BUSCAR" class="btn btn-warning">
</form>
</div>
</center>
</body>
</html>