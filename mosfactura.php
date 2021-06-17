<!DOCTYPE html>
<html>
<head>
	<title>FACTURAS</title>
</head>
<body>
<center>



<table border="1">
<tr>
	<td>Numero Factura</td>
	<td>Serie Factura</td>
	<td>Nombre del cliente</td>
	<td>Fecha</td>
	<td>Producto</td>
	<td>Cantidad</td>
	<td>Precio unitario</td>
</tr>
<?php

	include "encabezado.php";
	include "conexion.php";

	//select e.numeroFactura, e.serieFactura, cl.nombreCliente, e.fecha, p.nombreProducto, c.cantidad, p.precioProducto  from cuerpofactura c inner join encabezadofactura e on c.idEncabezadoFactura= e.idEncabezadoFactura inner join cliente cl on e.idCliente = cl.idCliente inner join producto p on c.idproducto=p.idproducto;

	$ab = mysqli_query($c,"select e.numeroFactura, e.serieFactura, cl.nombreCliente, e.fecha, p.nombreProducto, c.cantidad, p.precioProducto  from cuerpofactura c inner join encabezadofactura e on c.idEncabezadoFactura= e.idEncabezadoFactura inner join cliente cl on e.idCliente = cl.idCliente inner join producto p on c.idproducto=p.idproducto order by e.numeroFactura asc;");

	while($r = mysqli_fetch_array($ab)){
		echo "<tr>";
		echo "<td>".$r["numeroFactura"]."</td>";
		echo "<td>".$r["serieFactura"]."</td>";
		echo "<td>".$r["nombreCliente"]."</td>";
		echo "<td>".$r["fecha"]."</td>";
		echo "<td>".$r["nombreProducto"]."</td>";
		echo "<td>".$r["cantidad"]."</td>";
		echo "<td>".$r["precioProducto"]."</td>";
		
		echo "</tr>";
	}


?>
</table>
</center>
</body>
</html>