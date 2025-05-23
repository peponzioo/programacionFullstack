<?php

echo "Contar del 10 al 1<br>";

$ir = 11;
while ($ir >= 1) {
    echo $ir . "<br>";
    $ir--; 
}

echo "--------------------------------------------------------<br>";

echo "multiplos 3 menores q 50<br>";

$ne = 3;
while ($ne <= 50) {
    echo $ne . "<br>";
    $ne += 3;
}

echo "---------------------------------------------------------<br>";

echo "Sumar del 1 al 10<br>";

$suma = 0;
$x = 1;
while ($x <= 10) {
    $suma += $x;
    $x++;
}
echo "La suma es: " . $suma;

?>
