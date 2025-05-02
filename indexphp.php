<?php
$cadena= "peponz3io";

function validarcontasenia($cadena){
if (!preg_match('/[0-9]/', $cadena)){
echo "no da el numero requerido";
}
elseif (!preg_match('/[^A-Z a-z 0-9]/', $cadena)){
    echo "no tiene ni un caracter especial";
}
elseif(!preg_match('/[A-Z]/',$cadena)){
    echo "no tiene ni un caracter en mayuscula";

}
elseif(!strlen ($cadena<=8)){
 echo "la cadena debe tener al menos 8 caracteres";

}

}

validarcontasenia($cadena);
?>