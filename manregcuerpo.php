<?php

$ca = $_POST["can"];
$f = $_POST["ifac"];
$p = $_POST["ipro"];

include "conexion.php";
include "encabezado.php";





mysqli_query($c, "insert into CuerpoFactura(cantidad, idEncabezadoFactura, idproducto) values('$ca','$f','$p')");

echo "factura registrada<br>";
echo "<a href='regfactura.php'>volver al menu de factura</a>";

?>