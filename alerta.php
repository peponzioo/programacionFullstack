<?php

$temperatura = 38;       // Celsius
$humedad = 85;           // Porcentaje
$viento = 25;            // km/h
$precipitacion = 60;     // Porcentaje


function alertas_meteorologicas($temperatura, $humedad, $viento, $precipitacion) {
    echo "=====|> Sistema de Alertas Meteorológicas <|=====<br><br>";

  
    if ($temperatura >= 40) {
        echo "Advertencia: calor extremo quema nalgas | Es recomendable no salir a tomar sol.<br>";
    } elseif ($temperatura >= 30) {
        echo "Advertencia: calor a niveles fuertes | Ande con precaución, salga con agua.<br>";
    } elseif ($temperatura >= 20) {
        echo "Clima normal | Está fresco para tomar sol.<br>";
    } elseif ($temperatura >= 10) {
        echo "Está fresco | Recomendable estar medianamente abrigado.<br>";
    } elseif ($temperatura <= 0) {
        echo "Está frío con escarcha | Abrigarse bien, está bajo 0.<br>";
    } else {
        echo "Temperatura en rango templado.<br>";
    }

    
    if ($humedad >= 90) {
        echo "Humedad muy alta.<br>";
    } elseif ($humedad <= 20) {
        echo "Humedad muy baja.<br>";
    } else {
        echo "Humedad moderada.<br>";
    }

   
    if ($viento >= 70) {
        echo "Alerta por vientos muy fuertes | Precaución, puede volar todo.<br>";
    } elseif ($viento >= 30) {
        echo "Viento moderado | Tenga cuidado, pueden volar cosas.<br>";
    } else {
        echo "Viento normal | El viento está tranquilo, joya la verdad.<br>";
    }

    
    if ($precipitacion >= 80) {
        echo "Lluvias torrenciales | Evite zonas inundables.<br>";
    } elseif ($precipitacion >= 30) {
        echo "Posibilidad de lluvias | Lleve paraguas.<br>";
    } elseif ($precipitacion > 0) {
        echo "Muy poca posibilidad de lluvia.<br>";
    } else {
        echo "No llueve | Aunque quiera, probabilidad de 0%.<br>";
    }
}


alertas_meteorologicas($temperatura, $humedad, $viento, $precipitacion);

?>


