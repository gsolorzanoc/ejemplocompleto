<!DOCTYPE html>
<html>
<head>
	<title>FACTURACION</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formulariofactura">
<form action="manregcuerpo.php" method="post">
	<table>
		<tr>
			<td>Ingrese cantidad</td>
			<td><input type="number" name="can"></td>
		</tr>
		<tr>
			<td>Ingrese id factura</td>
			<td><input type="number" name="ifac"></td>
		</tr>
		<tr>
			<td>Ingrese id producto</td>
			<td><input type="text" name="ipro"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="REGISTRAR" class="btn btn-success">
</form>
</div>
</center>
</body>
</html>
