<?php
$frutas = array("Manzana", "Banana", "Naranja");
// O también:
 
 print_r($frutas);

$estudiante = [
    "nombre" => "Juan",
    "edad" => 17,
    "curso" => "3° Bachillerato"
];
print_r ($estudiante);
?>

<br><br>

<?php$frutas = array("Manzana", "Banana", "Naranja");
?>

<br><br>

<?php

$clase = [
    ["nombre" => "Ana", "nota" => 85],
    ["nombre" => "Luis", "nota" => 90],
    ["nombre" => "Marta", "nota" => 78]
]; print_r ($clase)
?>
<br><br>
<?php

$colores = ["rojo", "verde", "azul"];

// 1. Imprime el segundo color
echo $colores[1]; 

// 2. Añade "amarillo" al arreglo
$colores[0] = "amarillo";

// 3. Imprime el número de colores
print_r ($colores);
?>
<br><br>
<?php
$alumno = [
    "nombre" => "María",
    "edad" => 16,
    "materia_favorita" => "Matemáticas"
];

// 1. Imprime la edad de María
echo $alumno["edad"];

// 2. Cambia la materia favorita a "Informática"
$alumno["materia_favorita"] = "Informática";

// 3. Añade un nuevo campo "ciudad" con valor "Quito"
$alumno["ciudad"] = "Quito";
?>
<br><br>
<?php
$numeros = [5, 2, 8, 1, 9];

// 1. Ordena el arreglo de menor a mayor
sort($numeros);
print_r($numeros);

// 2. Verifica si el número 8 está en el arreglo
if (in_array(8, $numeros)) {
    echo "El 8 está en el arreglo";
}
?>
<br><br>
<?php
$estudiantes = [
    ["nombre" => "Carlos", "notas" => [8, 7, 9]],
    ["nombre" => "Ana", "notas" => [6, 5, 7]],
    // ... añade más estudiantes
];

foreach ($estudiantes as $est) {
    $promedio = array_sum($est["notas"]) / count($est["notas"]);
    $estado = ($promedio >= 7) ? "Aprobado" : "Reprobado";
    
    echo "Nombre: {$est['nombre']} | Promedio: $promedio | Estado: $estado<br>";
}
?>