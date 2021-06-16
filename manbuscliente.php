<!DOCTYPE html>
<html>
<head>
	<title>CLIENTE ENCONTRADO</title>
</head>
<body>
<center>



<table border="1">
<tr>
	<td>Id Cliente</td>
	<td>Nombre Cliente</td>
	<td>Nit Cliente</td>
	<td>Direccion Cliente</td>
</tr>
<?php

	include "encabezado.php";
	include "conexion.php";
	$i = $_POST["id"];
	$ab = mysqli_query($c,"select * from cliente where idCliente='$i'");

	while($r = mysqli_fetch_array($ab)){
		echo "<tr>";
		echo "<td>".$r["idCliente"]."</td>";
		echo "<td>".$r["nombreCliente"]."</td>";
		echo "<td>".$r["nitCliente"]."</td>";
		echo "<td>".$r["direccionCliente"]."</td>";
		echo "</tr>";
	}


?>
</table>
</center>
</body>
</html>