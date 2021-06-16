<?php

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

mysqli_query($c, "insert into producto(nombreProducto, descripcionProducto, precioProducto, idMarca, imagen) values('$n','$d','$p','$m','$destino')");

echo "dato registrado<br>";
echo "<a href='indexproductos.php'>volver al menu de productos</a>";

?>