<?php
echo "<h1>Hola php conectando a mysql</h1>";
 
$connection = mysqli_connect("mysqldb", "root", "password", "docker");
 
if (!$connection) {
    echo "Error conectando a la base de datos";
    exit;
}
 
echo "Conecatdo a la base de datos correctamente.";