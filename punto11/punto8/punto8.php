<?php
function espar($numero) {
    return $numero % 2 == 0;
}

    $numero = $_REQUEST['numero'];

    if (espar($numero)) {
        echo "El número $numero es par.";
    } else {
        echo "El número $numero es impar.";
    }
?>
