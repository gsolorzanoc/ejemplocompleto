<?php

$i=$_POST["id"];
include "conexion.php";
include "encabezado.php";

mysqli_query($c,"delete from empleado where idEmpleado='$i'");

echo "dato eliminado<br>";
echo "<a href='indexempleado.php'>volver al menu de empleados</a>";

?>