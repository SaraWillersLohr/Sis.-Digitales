<?php
function claves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        echo "Las claves ingresadas son distintas. Verfique su contraseña.";
    } else {
        echo "El registro fue exitoso.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_REQUEST['username'];
    $password1 = $_REQUEST['password1'];
    $password2 = $_REQUEST['password2'];

    claves($password1, $password2);
}
?>
