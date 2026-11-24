<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar informacion</title>
</head>
<body>
	<h2>ingresa tu nombre, edad y pasatiempo</h2>
<form method='POST'>
    <input type="text" name="nombre">
    <br><br>
    <input type="text" name="edad">
    <br><br>
    <input type="text" name="pasatiempo">
    <br><br>
    <button type="submit" name="guardar">Guardar</button>

    <button type="submit" name="eliminar">Eliminar todo</button>
</form>

<?php
if (isset($_POST["guardar"])){
	$nombre =$_POST["nombre"];
	$edad=$_POST["edad"];
	$pasatiempo=$_POST["pasatiempo"];
	file_put_contents("nombre.txt", $nombre . PHP_EOL,FILE_APPEND);
	file_put_contents("edad.txt", $edad . PHP_EOL,FILE_APPEND);
	file_put_contents("pasatiempo.txt", $pasatiempo. PHP_EOL,FILE_APPEND);
	echo "<p>Nombre Guardado correctamente.</p>";
}

if (isset($_POST["eliminar"])){
		if (file_exists("nombre.txt") || file_exists("edad.txt") || file_exists("pasatiempo.txt")) {
        if (file_exists("nombre.txt")) { unlink("nombre.txt"); }
        if (file_exists("edad.txt")) { unlink("edad.txt"); }
        if (file_exists("pasatiempo.txt")) { unlink("pasatiempo.txt"); }
            echo "<p><strong>Registros eliminados correctamente.</strong></p>";
        }else {
            echo "<p>No hay archivo que eliminar.</p>";
        }
    }
?>

<h3>Lista de alumnos de 3°A registrados</h3>

<?php
if (file_exists("nombre.txt")){
	$contenido=file_get_contents("nombre.txt");
	echo nl2br($contenido);
}
if (file_exists("edad.txt")){
	$contenido=file_get_contents("edad.txt");
	echo nl2br($contenido);
}
if (file_exists("pasatiempo.txt")){
	$contenido=file_get_contents("pasatiempo.txt");
	echo nl2br($contenido);
}
else
	{echo "no existen registros.";}
?>
<?php

?>
</body>
</html>