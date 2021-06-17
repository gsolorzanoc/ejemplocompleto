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
<form action="manregencabezado.php" method="post">
	<table>
		<tr>
			<td>Ingrese fecha</td>
			<td><input type="date" name="fec"></td>
		</tr>
		<tr>
			<td>Ingrese numero de factura</td>
			<td><input type="number" name="nfac"></td>
		</tr>
		<tr>
			<td>Ingrese serie de factura</td>
			<td><input type="text" name="sfac"></td>
		</tr>
		<tr>
			<td>Ingrese numero de cliente</td>
			<td><input type="number" name="idcli"></td>
		</tr>
		<tr>
			<td>Ingrese numero de empleado</td>
			<td><input type="number" name="idemp"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="REGISTRAR" class="btn btn-success">
</form>
</div>
</center>
</body>
</html>
