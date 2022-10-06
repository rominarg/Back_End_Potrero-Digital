<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tarea N°5</h1>
<p>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</p>    
<?php
$numerospares = ["0","2","6","8","10","12","14","16","18","20"];
foreach ($numerospares as $valor) {
    print "$valor";
    echo "<br>";
}
?>
<br>
<hr>

<p>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r().</p>
<?php
$matriz = ["Pedro","Ana","34","1"];
print_r ($matriz);
?>
<br>
<hr>

<p>3. Crear un array asociativo e introducir los siguientes valores: Nombre: Pedro Apellido: Torres Dirección: Av. Mayor 3703 Teléfono: 1122334455</p><br>
<?php
$asociativo = [
    'nombre' => "Pedro",
    'apellido' =>"Torres",
    'Dirección' =>"Av. Mayor 3703",
    'Teléfono' =>"1122334455"];
    print_r($asociativo);
?>
<br>
<hr>

<p>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</p><br>
<?php
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
print "La ciudad con el indice 0 tiene el nombre $ciudades[0].";
echo "<br>";
print "La ciudad con el indice 1 tiene el nombre $ciudades[1].";
echo "<br>";
print "La ciudad con el indice 2 tiene el nombre $ciudades[2].";
echo "<br>";
print "La ciudad con el indice 3 tiene el nombre $ciudades[3].";
echo "<br>";
print "La ciudad con el indice 4 tiene el nombre $ciudades[4].";
echo "<br>";
print "La ciudad con el indice 5 tiene el nombre $ciudades[5].";
echo "<br>";
?>
<br>
<hr>

<p>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD..</p>
<?php
$ciudades1 = [
    'MD' =>"Madrid",
    'BCL' =>"Barcelona",
    'LD' =>"Londres",
    'NY' =>"New York",
    'LA' =>"Los Ángeles",
    'CCG' =>"Chicago",
];
print "El indice de $ciudades1[MD] es MD.";
echo "<br>";
print "El indice de $ciudades1[BCL] es BCL.";
echo "<br>";
print "El indice de $ciudades1[LD] es LD.";
echo "<br>";
print "El indice de $ciudades1[NY] es NY.";
echo "<br>";
print "El indice de $ciudades1[LA] es LA.";
echo "<br>";
print "El indice de $ciudades1[CCG] es CCG.";
echo "<br>";
?>
<br>
<hr>
</body>
</html>
