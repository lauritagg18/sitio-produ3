<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<title>Envio de consultas</title>
</head>

<body>

<?php
$destino = "lauritagg185@gmail.com";
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$mensaje = $_POST['mensaje'];
$cabecera = $_POST['email'];
mail ($destino, $asunto, $mensaje,$cabecera );

print ("<h2>Muchas gracias por su mensaje</h2>");

?>

</body>
</html>
