<?php

$n = $_POST["nom"];

include "conexion.php";
include "encabezado.php";

mysqli_query($c, "insert into marca(nombreMarca) values('$n')");

echo "dato registrado<br>";
echo "<a href='indexmarcas.php'>volver al menu de marcas</a>";

?>