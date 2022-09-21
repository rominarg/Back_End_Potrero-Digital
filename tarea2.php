<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practico 1</title>
</head>
<body>
 <h1>Crear un archivo “tp1_backend.php” y realizar los siguientes ejercicios:</h1>
 <p> 1. Imprima por pantalla: “Hola mundo”.</p>
<?php
echo "hola mundo";
?>
<br>
<hr>
<p>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p>
<?php
$saludo= "hola mundo";
echo $saludo;
?>
<br>
<hr>
<p>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.
</p>
<?php
 $frutilla= 25;
 ?>
 <?php
 $limones= 50;
?>
<?php
echo $total_suma= $frutilla+$limones;
?>
<br>
<hr>
<?php
echo $total_resta= $limones-$frutilla;
?>
<br>
<hr>
<?php
echo $total_multi= $frutilla*$limones;
?>
<br>
<hr>
<?php
echo $total_divi= $frutilla/$limones;
?>
<br>
<hr>
<?php
echo $total_resto= $limones%$frutilla;
?>
<hr>
<p>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.</p>
<?php
$celsius= 20;
?>

<?php
echo $farenheit=1.8*$celsius+32;
?>
<br>
<hr>
<p>5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</p>
<?php
$base= 18;
$altura= 12;
echo $perimetro= ($base+$altura)*2;
?>
<br>
<?php
echo $area= $base*$altura;
?>
<br>
<hr>
<p>
    b)
</p>
<?php
$radio= 30;
$pi= 3.14;
echo $perimetro_circulo= 2*$radio*$pi;
?>
<br>
<?php
echo $area_circulo= ($radio*$radio)*$pi;
?>
</body>
</html>