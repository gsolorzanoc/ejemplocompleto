<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO DE CLIENTE</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formulariocliente">
<form action="manregcliente.php" method="post">
	<table>
		<tr>
			<td>Ingrese nombre del cliente</td>
			<td><input type="text" name="nom"></td>
		</tr>
		<tr>
			<td>Ingrese nit del cliente</td>
			<td><input type="text" name="nit"></td>
		</tr>
		<tr>
			<td>Ingrese direccion del cliente</td>
			<td><input type="text" name="dir"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="REGISTRAR" class="btn btn-success">
</form>
</div>
</center>
</body>
</html>