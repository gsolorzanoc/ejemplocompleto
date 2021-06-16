<?php

$n = $_POST["nom"];
$n1 = $_POST["nit"];
$d = $_POST["dir"];

include "conexion.php";
include "encabezado.php";

mysqli_query($c, "insert into cliente(nombreCliente, nitCliente, direccionCliente) values('$n','$n1','$d')");

echo "dato registrado<br>";
echo "<a href='indexcliente.php'>volver al menu de clientes</a>";

?>