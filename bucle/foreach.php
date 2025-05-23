<?php

$nombres = ["Ana", "Luis", "Pedro", "María"];

echo "<h3>Nombres</h3>";
foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}

echo "------------------------------------------------------<br>"; 

$productos = [ "Pan" => 40, "Leche" => 60, "Queso" => 120 ];

echo "<h3>Ejercicio 2: Productos y precios</h3>";
foreach ($productos as $producto => $precio) {
    echo $producto . ": $" . $precio . "<br>";
}

?>
