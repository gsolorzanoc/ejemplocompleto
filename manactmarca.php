<?php

$i = $_POST["id"];
$n = $_POST["nom"];

include "conexion.php";
include "encabezado.php";

mysqli_query($c, "UPDATE marca SET nombreMarca='$n'  WHERE idMarca='$i'");

echo "dato actualizado<br>";
echo "<a href='indexmarcas.php'>volver al menu de marcas</a>";

?>