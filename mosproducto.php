<!DOCTYPE html>
<html>
<head>
	<title>EMPLEADOS REGISTRADOS</title>
</head>
<body>
<center>



<table border="1">
<tr>
	<td>Id Producto</td>
	<td>Nombre Producto</td>
	<td>Descripcion Producto</td>
	<td>Precio Producto</td>
	<td>Marca</td>
	<td>Imagen</td>
</tr>
<?php

	include "encabezado.php";
	include "conexion.php";

	$ab = mysqli_query($c,"select * from producto p inner join marca m on p.idMarca= m.idMarca");

	while($r = mysqli_fetch_array($ab)){
		echo "<tr>";
		echo "<td>".$r["idproducto"]."</td>";
		echo "<td>".$r["nombreProducto"]."</td>";
		echo "<td>".$r["descripcionProducto"]."</td>";
		echo "<td>".$r["precioProducto"]."</td>";
		echo "<td>".$r["nombreMarca"]."</td>";
		echo "<td><img src='".$r["imagen"]."' width='100px' height='75px'></td>";
		echo "</tr>";
	}


?>
</table>
</center>
</body>
</html>