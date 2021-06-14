<!DOCTYPE html>
<html>
<head>
	<title>MARCAS REGISTRADAS</title>
</head>
<body>
<center>



<table border="1">
<tr>
	<td>Id Marca</td>
	<td>Nombre Marca</td>
</tr>
<?php

	include "encabezado.php";
	include "conexion.php";

	$ab = mysqli_query($c,"select * from marca");

	while($r = mysqli_fetch_array($ab)){
		echo "<tr>";
		echo "<td>".$r["idMarca"]."</td>";
		echo "<td>".$r["nombreMarca"]."</td>";
		echo "</tr>";
	}


?>
</table>
</center>
</body>
</html>