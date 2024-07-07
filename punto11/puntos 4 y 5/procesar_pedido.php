<?php

    $file = fopen("pedidos.txt", "a") or die("Problemas, por favor intente nuevamente");

    fputs($file, $_REQUEST['nombre'] . "\n");
    fputs($file, $_REQUEST['direccion'] . "\n");

    if (isset($_REQUEST['jamonqueso'])) {
        fputs($file, $_REQUEST['nombre'] . " desea " . $_REQUEST['jyq'] . " de jamón y queso.\n");
    }
    if (isset($_REQUEST['napolitana'])) {
        fputs($file, $_REQUEST['nombre'] . " desea " . $_REQUEST['napo'] . " de napolitana.\n");
    }
    if (isset($_REQUEST['muzzarella'])) {
        fputs($file, $_REQUEST['nombre'] . " desea " . $_REQUEST['muzza'] . " de muzzarella.\n");
    }

    fputs($file, "--------------------------------------------------------\n");
    fclose($file);

    $file = fopen("pedidos.txt", "r") or die("Problemas, por favor intente nuevamente");
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea) {
            echo nl2br($linea);
        }
    }
    fclose($file);

    echo "Los datos se cargaron correctamente.";

?>
