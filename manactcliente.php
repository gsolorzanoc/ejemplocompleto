<?php

$i = $_POST["id"];
$n = $_POST["nom"];
$n1 = $_POST["nit"];
$d = $_POST["dir"];

include "conexion.php";
include "encabezado.php";

mysqli_query($c, "UPDATE cliente SET nombreCliente='$n', nitCliente='$n1', direccionCliente='$d'  WHERE idCliente='$i'");

echo "dato actualizado<br>";
echo "<a href='indexcliente.php'>volver al menu de clientes</a>";

?>