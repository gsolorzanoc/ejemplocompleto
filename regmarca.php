<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO DE MARCAS</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="formulariomarca">
<form action="manregmarca.php" method="post">
	<table>
		<tr>
			<td>Ingrese nombre de la marca</td>
			<td><input type="text" name="nom"></td>
		</tr>
	</table>
	<input type="submit" name="reg" value="REGISTRAR" class="btn btn-success">
</form>
</div>
</center>
</body>
</html>