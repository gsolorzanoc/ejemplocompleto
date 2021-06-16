<?php

$i=$_POST["id"];
include "conexion.php";
include "encabezado.php";

mysqli_query($c,"delete from cliente where idCliente='$i'");

echo "dato eliminado<br>";
echo "<a href='indexcliente.php'>volver al menu de clientes</a>";

?>