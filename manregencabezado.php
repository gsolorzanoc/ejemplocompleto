<?php

$f = $_POST["fec"];
$n = $_POST["nfac"];
$s = $_POST["sfac"];
$cl = $_POST["idcli"];
$e = $_POST["idemp"];


include "conexion.php";
include "encabezado.php";

mysqli_query($c, "insert into encabezadoFactura(fecha, numeroFactura, serieFactura, idCliente, idEmpleado) values('$f','$n','$s','$cl','$e')");

echo "factura registrada<br>";
echo "<a href='regfactura.php'>volver al menu de factura</a>";

?>