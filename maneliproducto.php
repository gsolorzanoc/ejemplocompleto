<?php

$i=$_POST["id"];
include "conexion.php";
include "encabezado.php";

mysqli_query($c,"delete from producto where idproducto='$i'");

echo "dato eliminado<br>";
echo "<a href='indexproductos.php'>volver al menu de producto</a>";

?>