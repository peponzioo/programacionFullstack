<?php


for ($i =0 ; $i <= 100; $i++){
    echo $i . "<br>"; 


}
echo "--------------------------------------------------------------------<br>";
for($o = 1; $o <=10; $o++){
    $resultadocalc = 5 * $o;
    echo"5 x $o = $resultadocalc<br>";
    
}
echo"<--------------------------------------------------------------------<br>";
$SUMA =0;
for ($U = 2; $U <= 100; $U += 2){
 $SUMA += $U;
}
echo"las suma de los 50 numeros pares es ->$SUMA";
?>