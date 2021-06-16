<!DOCTYPE html>
<html>
<head>
	<title>BUSCAR CLIENTE</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formulariocliente">
<form action="manbuscliente.php" method="post">
	<table>
		<tr>
			<td>Ingrese id del cliente</td>
			<td><input type="number" name="id"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="BUSCAR" class="btn btn-warning">
</form>
</div>
</center>
</body>
</html>