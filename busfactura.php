<!DOCTYPE html>
<html>
<head>
	<title>BUSCAR FACTURA</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formulariofactura">
<form action="manbusfactura.php" method="post">
	<table>
		<tr>
			<td>Ingrese numero factura</td>
			<td><input type="number" name="nfac"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="BUSCAR" class="btn btn-warning">
</form>
</div>
</center>
</body>
</html>