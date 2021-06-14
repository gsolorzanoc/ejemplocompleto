<?php

$i = $_POST["id"];
$n = $_POST["nom"];
$p = $_POST["pue"];
$s = $_POST["sue"];

include "conexion.php";
include "encabezado.php";

mysqli_query($c, "UPDATE empleado SET nombreEmpleado='$n', puestoEmpleado='$p', sueldoEmpleado='$s'  WHERE idEmpleado='$i'");

echo "dato actualizado<br>";
echo "<a href='indexempleado.php'>volver al menu de empleados</a>";

?>