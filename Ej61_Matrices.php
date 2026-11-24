<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset]="UTF-8">
	<title>Areglo Multidimensional de numeros pares </title>
</head>
<body>
	<h2>Arreglo multidimensional para numeros pares</h2>
<?php
	$numeros=array();
	$valor=100;
	for ($f=0; $f<3; $f++){
		for($a=0; $a<3; $a++){
			$numeros[$f][$a]=$valor;
			$valor+=10;
		}
	}
echo "<h2>MatrizA</h2>";
echo "<table border='1' cellpadding='10' cellpadding='0'>";
for ($f=0; $f<3; $f++){
	echo "<tr>";
	for ($a=0; $a<3; $a++){
		echo "<td aling='center'>";
    	echo $numeros[$f][$a]." ";
    	echo "</td>";}
    echo "</tr>";	

}
echo "</table>";
echo "<br><br>";

$numero=array();
	$valor=500;
	for ($b=0; $b<3; $b++){
		for($c=0; $c<3; $c++){
			$numero[$b][$c]=$valor;
			$valor+=20;
		}
	}
echo "<h2>MatrizB</h2>";
echo "<table border='1' cellpadding='10' cellpadding='0'>";
for ($b=0; $b<3; $b++){
	echo "<tr>";
	for ($c=0; $c<3; $c++){
		echo "<td aling='center'>";
    	echo $numero[$b][$c]." ";
    	echo "</td>";}
    echo "</tr>";	

}
echo "</table>";


$numeros2=array();
	$valor=0;
	for ($i=0; $i<3; $i++){
		for($t=0; $t<3; $t++){
			$valor=$numeros[$i][$t]+$numero[$i][$t];			
			$numeros2[$i][$t]=$valor;
		}
	}
echo "<h2>MatrizC</h2>";
echo "<table border='1' cellpadding='10' cellpadding='0'>";
for ($i=0; $i<3; $i++){
	echo "<tr>";
	for ($t=0; $t<3; $t++){
		echo "<td aling='center'>";
    	echo $numeros2[$i][$t]." ";
    	echo "</td>";}
    echo "</tr>";	

}
echo "</table>";
?>
</body>
</html>