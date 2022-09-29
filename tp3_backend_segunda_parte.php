<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1. Mostrar los números del 1 al 100.</p>
    <?php
   $n=1;
   while ($n <= 100) {
    echo"$n\n";
    $n++;
   } 
   
    ?>
<br>
<hr>

<p>2. Mostrar los números del 100 al 1.</p>
<?php
$n=100;
while ($n <= 100 and $n > 0) {
    echo "$n\n";
    $n--;
}
?>
<br>
<hr>

<p>3. Mostrar los números pares del 1 al 100.</p>
<?php
for($n=1; $n <=100; $n++) {
    while ($n%2==0){
        echo "<p>$n</p>";
        $n++;
    }
}
?>
<br>
<hr>

<p>4. Mostrar los números impares del 1 al 100.</p>
<?php
for ($n=1; $n <100; $n++) {
    while( $n%2!=0){
        echo "<p>$n</p>"; 
        $n++;
    }
   
}
?>
<br>
<hr>


<p>5. Mostrar la suma de los números de 1 a 20.</p>
<?php
$r=0;
for ($n=1; $n<=20; $n++){
    $r = $n + $r;
echo "$r<br>";
}
?>
<br>
<hr>

<p>6. Mostrar la suma de números pares de 1 a 20.</p>
<?php
$r=0;
for ($n=2; $n<=20; $n=$n+2){
    $r = $n + $r;
echo "$r<br>";
}
?>
<br>
<hr>

</body>
</html>