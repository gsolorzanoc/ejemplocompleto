<!DOCTYPE html>
<html>
<head>
	<title>EMPLEADOS REGISTRADOS</title>
</head>
<body>
<center>



<table border="1">
<tr>
	<td>Id Empleado</td>
	<td>Nombre Empleado</td>
	<td>Puesto Empleado</td>
	<td>Sueldo Empleado</td>
</tr>
<?php

	include "encabezado.php";
	include "conexion.php";

	$ab = mysqli_query($c,"select * from empleado");

	while($r = mysqli_fetch_array($ab)){
		echo "<tr>";
		echo "<td>".$r["idEmpleado"]."</td>";
		echo "<td>".$r["nombreEmpleado"]."</td>";
		echo "<td>".$r["puestoEmpleado"]."</td>";
		echo "<td>".$r["sueldoEmpleado"]."</td>";
		echo "</tr>";
	}


?>
</table>
</center>
</body>
</html>