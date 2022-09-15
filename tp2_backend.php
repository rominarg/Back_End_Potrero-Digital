<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUCTURAS DE CONTROL: PARTE 1</title>
</head>
<body>
    <h1>ESTRUCTURAS DE CONTROL: PARTE 1</h1>
<br>
<hr>  

<p>1. Crear una variable n y validar que sea un número positivo.</p>
<p>Solución:</p>
<h4><li><strong>Si mi variable es 2:</strong></li></h4>
<?php
$num=2;
if ($num>=0){
echo "$num es positivo";
} else {
    echo "$num es negativo";
}
?>
<br>
<h4><li><strong>Si mi variable es -2:</strong></li></h4>
<?php
$num=-2;
if ($num>=0){
echo "$num es positivo";
} else {
    echo "$num es negativo";
}
?>
<br>
<hr>

<p>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</p>
    <p>Solución:</p>
    <h4><li><strong>Si mi variable es 8:</strong></li></h4>
   
<?php
$b=8;
if ($b>1 & $b<10){
echo "$b es mayor a 1 y menor a 10";
} else {
    echo "$b No es mayor a 1 y menor a 10";
}
?>
<br>

<h4><li><strong>Si mi variable es 0:</strong></li></h4>
<?php
$b=-1;
if ($b>1 & $b<10){
echo "$b es mayor a 1 y menor a 10";
} else {
    echo "$b No es mayor a 1 y menor a 10";
}
?>
<br>
<hr>

<p>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</p>
<h4><li><strong>Si mi variable es 1:</strong></li></h4>
<p>Solución:</p>
<?php
$b=1;
if ($b>10 || $b<2){
echo "$b es mayor a 10 o menor a 2";
}
?>
<br>
<hr>

<p>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</p>
<p>Solución:</p>
<h4><li><strong>El número 1 es 6 y el número 2 es 2.</strong></li></h4>
<h4>Suma</h4>
<?php
$num1=6;
$num2=2;
if ($num1>$num2){
    echo "La suma es ".($num1 + $num2);
}
?>
<br>

<h4><li><strong>El número 1 es 6 y el número 2 es 2.</strong></li></h4>
<h4>Resta</h4>
<?php
$num1=6;
$num2=2;
if ($num1>$num2){
    echo "La resta es ".($num1 - $num2);
}
?>
<br>

<p>Si numero2 es mayor a numero1.</p>
<h4><li><strong>El número 1 es 2 y el número 2 es 8.</strong></li></h4>
<h4>Multiplicacion</h4>
<?php
$num1=2;
$num2=8;
if ($num1<$num2){
    echo "La multiplicacion es ".($num1 * $num2);
}
?>
<br>

<h4>División Entera </h4>
<h4><li><strong>El número 1 es 2 y el número 2 es 8.</strong></li></h4>
<?php
$num1=2;
$num2=8;
if ($num1<$num2){
    echo "La división es ".($num2 / $num1);
}
?>
<br>

<h4>Resto de una División</h4>
<h4><li><strong>El número 1 es 2 y el número 2 es 8.</strong></li></h4>
<?php
$num1=2;
$num2=8;
if ($num1<$num2){
    echo "El resto de la división es: ".($num2 % $num1);
}
?>
<br>

<h4>Igualdad de Números</h4>
<h4><li><strong>El número 1 es 2 y el número 2 es 2.</strong></li></h4>
<?php
$num1=2;
$num2=2;
if ($num1=$num2){
    echo "Los números ingresados son iguales ".($num1 = $num2);
}
?>

   
</body>
</html>
