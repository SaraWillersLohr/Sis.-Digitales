<?php

echo "Sara Willers TP Vectores"."<br>". "<br>";
echo "Punto 1"."<br>". "<br>";
$semana= array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");

echo "El primer dia de la semana es: ". $semana[0];
echo "<br>";
echo "El último dia de la semana es: ". $semana[6]."<br>"."<br>";

echo "Punto 2"."<br>". "<br>";
$coches=array("Nissan","Chevrolet","Audi","Ford","Honda","Hyundai","Alfa Romeo","Fiat");
echo $coches[5]."<br>"."<br>";

echo "Punto 3"."<br>". "<br>";
$importe=array(2.55,2.3,4.65,9.44);
echo $importe[1]."<br>". "<br>";
echo "Punto 4"."<br>"."<br>";
$confirmado = array(true, false, true, true, false, false);

echo $confirmado[0] ? 'true' : 'false'."<br>"."<br>";

echo "Punto 5"."<br>". "<br>";
$jugador=array("Sanchez", "López","Gomez", "Gonzalez", "Pérez");
echo "La alineación del equipo está compuesta por " . $jugador[0] . ", " . $jugador[1] . ", " . $jugador[2] . ", " . $jugador[3] . ", y " . $jugador[4] . "<br>". "<br>";


echo "Punto 6"."<br>". "<br>";
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

sort($meses);

foreach ($meses as $mes) {
    echo $mes . "<br>";
}
echo "<br>";
echo "Punto 7"."<br>". "<br>";
$registro = array(
'juan' => '1234',
'ana' => '1984',
'pedro' => '2306',
'maria' => '0537',
'pablo' => '4529',
);
echo $registro['juan']. "<br>";
echo $registro['ana']. "<br>";
echo $registro['pedro']. "<br>";
echo $registro['maria']. "<br>";
echo $registro['pablo']. "<br>";

echo "Punto 8"."<br>". "<br>";

$meses = array(
    "Enero" => 31,
    "Febrero" => 28, 
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" => 31
);


foreach ($meses as $mes => $dias) {
    echo $mes ." tiene". $dias. "días.". "<br>";
}
?>


