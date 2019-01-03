<?php 
$arreglo = [
	'keyStr1' => 'lado',
	0 => 'ledo',
	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'
];

$arreglo2 = 'decirlo al revés lo dudo.';

echo "<h3>Ejercicio 1</h3>";
echo "$arreglo[keyStr1], $arreglo[0], $arreglo[keyStr2], $arreglo[1], $arreglo[2]<br>";
echo "$arreglo2<br>";
echo "$arreglo[2], $arreglo[1], $arreglo[keyStr2], $arreglo[0], $arreglo[keyStr1]<br>";
echo '¡Qué trabajo me ha costado!';
echo "<br><hr>";

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

echo "<br><h3>Ejercicio 2</h3>";
$arreglo3 = [
	'Mexico' => [
		'Guadalajara',
		'Tijuana',
		'Monterrey'
	],
	'Dinamarca' => [
		'Copenhague',
		'Odense',
		'Aarhus'
	],
	'Venezuela' => [
		'Caracas',
		'Maracaibo',
		'San Cristobal'
	],
	'Colombia' => [
		'Medellin',
		'Bogota',
		'Cucuta'
	],
	'Japon' => [
		'Tokyo',
		'Kyoto',
		'Osaka'
	]
];

foreach ($arreglo3  as $pais => $ciudades) {
	echo "<br>El País $pais se tiene como ciudades a <br>";
	foreach ($ciudades as $valor){
		echo "		$valor<br>";
	}
}

echo "<br><hr><br>";

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
echo "<h3>Ejercicio 3</h3>";
$arreglo4 = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
rsort($arreglo4);
echo "<br>";
echo "Los tres valores mas bajos altos son: <br>";
for ($i=0; $i < 3; $i++){
	echo "$arreglo4[$i]<br>";
}
echo "<br>";
echo "Los tres valores mas bajos son: <br>";
$tam = count($arreglo4);
for ($i = 1; $i < 4; $i++) {
	echo $arreglo4[($tam - $i)]."<br>";
};
// var_dump ($arreglo4);

?>