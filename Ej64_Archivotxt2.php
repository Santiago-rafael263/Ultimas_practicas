<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar informacion</title>
</head>
<body>
	<h2>Guardar informacion de un archivo</h2>
<form method='POST'>
    <input type="texts" name="nombre">
    <br><br>
    <button type="submit" name="guardar">Guardar</button>
</form>

<?php
if (isset($_POST["guardar"])){
	$nombre =$_POST["nombre"];
	file_put_contents("ProgramacionA.txt", $nombre . PHP_EOL,FILE_APPEND);
	echo "<p>Nombre Guardado correctamente.</p>";
}
?>
<h3>Lista de alumnos de 3°A registrados</h3>

<?php
if (file_exists("ProgramacionA")){
	$contenido=file_get_contents("ProgramacionA.txt");
	echo nl2br($contenido);
}
else
	{echo "no existen registros.";}
?>
<?php

?>
</body>
</html>