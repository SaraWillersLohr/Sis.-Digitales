<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Info del usuario:</h1>
<?php
$nombre = $_POST['nombre'];

$apellido =$_POST['apellido'];

$edad = $_POST['edad'];

$dni = $_POST['DNI'];

$fecha = $_POST['fecha'];

$gender =$_POST['gender'];

$ciudad =$_POST['ciudad_nacimiento'];

$direc = $_POST['dire'];

$hobbies = $_POST['hobb'];

$comment = $_POST['comment'];
echo " Tu nombre es $nombre $apellido, y tienes $edad años. 
Tu dni es $dni , y naciste el $fecha en $ciudad.
Tu género es $gender, vives en $direc, y tus intereses son: $hobbies. ¡Gracias por inscribirte!"
?>
</div>
</body>
</html>