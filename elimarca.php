<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR MARCAS</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formulariomarca">
<form action="manelimarca.php" method="post">
	<table>
		<tr>
			<td>Ingrese id de la marca</td>
			<td><input type="number" name="id"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="BUSCAR" class="btn btn-danger">
</form>
</div>
</center>
</body>
</html>