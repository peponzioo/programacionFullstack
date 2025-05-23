<?php
$cadena = "peponz3io"; //contra

function validarcontasenia($cadena){
    echo "Evaluando contraseña: $cadena<br>";

    $cumple = 0;

    if (strlen($cadena) < 8){
        echo " La contraseña debe tener al menos 8 caracteres<br>";
    } else {
        echo " Tiene al menos 8 caracteres<br>";
        $cumple++;
    }

    if (!preg_match('/[A-Z]/', $cadena)){
        echo " No tiene ninguna letra mayúscula<br>";
    } else {
        echo " Contiene al menos una letra mayúscula<br>";
        $cumple++;
    }

    if (!preg_match('/[0-9]/', $cadena)){
        echo " No tiene ningún número<br>";
    } else {
        echo " Contiene al menos un número<br>";
        $cumple++;
    }

    if (!preg_match('/[^a-zA-Z0-9]/', $cadena)){
        echo " No tiene ningún carácter especial<br>";
    } else {
        echo " Contiene al menos un carácter especial<br>";
        $cumple++;
    }

    
    echo "<br>Clasificación: ";
    if ($cumple <= 1){
        echo "Débil ";
    }
    elseif ($cumple == 2 || $cumple == 3){
        echo "Media ";
    }
    else{
        echo "Fuerte ";
    }
}

validarcontasenia($cadena);
?>
