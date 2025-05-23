<?php

$intentos = 0;

do {
    $dado = rand(1, 6);
    echo "Salió: $dado\n<br>";
    $intentos++;
} while ($dado != 6);{
    echo "se lazo el dado $intentos hasta que salió un 6<br>";
}
?>
<?php
do {
    $simular = rand(1, 200);
    echo "Salió: $simular<br>";
} while ($simular <= 100);

echo "<br>Número mayor que 100 ingresado (simulado): $simular <br>";
echo "<br>";
   







   

?>