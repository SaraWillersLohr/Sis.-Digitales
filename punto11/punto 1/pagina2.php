<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$ar = fopen("datos.txt", "a") or
die("Problemas en la creacion");
fputs($ar, $_REQUEST['nombre']);
fputs($ar, "\n");
fputs($ar, $_REQUEST['comentarios']);
fputs($ar, "\n");
fputs($ar, "--------------------------------------------------------");
fputs($ar, "\n");
fclose($ar);
echo "Los datos se cargaron correctamente.";

    "Se declara la variable ar y se utiliza el comando fopen pra abrir o crear un archivo de texto.
    Si no se puede crear, en pantalla se mostrará el mensaje Problemas en la creación.
    A continuación, se accede a los datos ingresados en la pagina1.php y se las guarda en este archivo de texto.
    Se muestran esos datos, se hace una linea divisora entre estos y el mensaje final. Se cierra el archivo de texto. 
    Para finalizar se muestra el mensaje Se cargaron los datos correctamente. "
?>

</body>
</html>