<!DOCTYPE html>
<html>
<head>
	<title>BUSCAR DE MARCAS</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formulariomarca">
<form action="manbusmarca.php" method="post">
	<table>
		<tr>
			<td>Ingrese id de la marca</td>
			<td><input type="number" name="id"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="BUSCAR" class="btn btn-warning">
</form>
</div>
</center>
</body>
</html>