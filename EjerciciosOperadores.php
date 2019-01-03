<?php 

echo "<h3>Ejercicio 1</h3> <br>";
$val1 = 32;
$val2 = 3;

echo "El valor de 32 + 3 es: <br>";
echo $val1 + $val2;
echo "<br><br>";
$val3 = 2;
echo "El valor de 3(2+3) es: <br>";
echo $val2 * ($val3 + $val2);
echo "<br><br>";

echo "<hr><h3>Ejercicio 2</h3><br><br>";
echo '$valor es mayor que 5 pero menor que 10: (($valor > 5) && ($valor < 10));<br>';
echo '$valor es mayor o igual a 0 pero menor o igual a 20: (($valor >= 0) || ($valor <= 20)); <br>';
echo '$valor es igual a “10” asegurando que el tipo de dato sea cadena: ($valor === "10"); <br>';
echo '$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15: (($valor > 0) && ($valor < 5)) || (($valor > 10) && ($valor < 15));';

?>