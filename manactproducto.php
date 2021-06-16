<?php

$i = $_POST["id"];
$n = $_POST["nom"];
$d = $_POST["des"];
$p = $_POST["pre"];
$m = $_POST["mar"];
$foto = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino ="img/".$foto;
copy($ruta,$destino);

include "conexion.php";
include "encabezado.php";

mysqli_query($c, "UPDATE producto SET nombreProducto='$n', descripcionProducto='$d', precioProducto='$p', idMarca='$m', imagen='$destino'  WHERE idproducto='$i'");

echo "dato actualizado<br>";
echo "<a href='indexproductos.php'>volver al menu de productos</a>";

?>