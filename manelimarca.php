<?php

$i=$_POST["id"];
include "conexion.php";
include "encabezado.php";

mysqli_query($c,"delete from marca where idMarca='$i'");

echo "dato eliminado<br>";
echo "<a href='indexmarcas.php'>volver al menu de marcas</a>";

?>