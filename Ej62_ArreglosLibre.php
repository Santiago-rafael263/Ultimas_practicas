<!DOCTYPE html>
<html lang="es">
<style>
	table{
	border-collapse: collapse;
	background: white;
}
th, td{
	border: 1px solid black;
	padding: 8px;
	text-align: center;
}
</style>
<head>
	<meta charset="UTF-8">
	<title>Pregunta</title>
</head>
<body>

	<h2> pregunta</h2>
	<form method="POST" action="">
		<h2>Di Hola</h2>

	<?php

	for ($i=0; $i<1; $i++){
		echo "<input type='text' name='num1[]'>"."";
		}
?>
<button type="submit" name="continuar" value="continuar">
		continue</button>

<?php
if (isset($_POST['continuar'])) {

		$imprimir=$_POST['num1'];

		$imprimir=array();
		for ($i=0; $i<1; $i++){
			$imprimir[$i]="Te pica la cola";
		}
	echo "<table>";
	echo "	<tr>
	
		</tr>";
		for ($i=0; $i<1; $i++) {
			echo "<tr>";
			echo "<td>".$imprimir[$i]."</td>";
			echo "</tr>";
		}
		echo "</table>";
}