<?php

$file = fopen("comprobante.txt", "a") or die("Problemas, por favor reenvíe el formulario.");

fputs($file, "Apellido: ".$_REQUEST['apellido'] . "\n");
fputs($file, "Nombre: ".$_REQUEST['nombre'] . "\n");
fputs($file, "DNI: ".$_REQUEST['dni'] . "\n");
fputs($file, "Fecha de Nacimiento: ".$_REQUEST['fecha'] . "\n");
fputs($file, "Curso: ".$_REQUEST['curso'] . "\n");
fputs($file, "Cantidad de materias adeudadas: ".$_REQUEST['adeudadas'] . "\n");
fputs($file, "Materia: ".$_REQUEST['materia'] . "\n");
fputs($file, "Fecha de Inscripcion: ".$_REQUEST['finscripcion'] . "\n");

fputs($file, "--------------------------------------------------------\n");
    fclose($file);
    $file = fopen("comprobante.txt", "r") or die("Problemas, por favor intente nuevamente");
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea) {
            echo nl2br($linea);
        }
    }
    fclose($file);

    echo "Los datos se cargaron correctamente.";
?>