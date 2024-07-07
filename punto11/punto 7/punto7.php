<?php
function sumar($num1, $num2) {
    return $num1 + $num2;
}


    $numero1 = $_REQUEST['numero1'];
    $numero2 = $_REQUEST['numero2'];

    $suma = sumar($numero1, $numero2);
ECHO "Resultado: ";
    echo "La suma de $numero1 y $numero2 es $suma";

?>
