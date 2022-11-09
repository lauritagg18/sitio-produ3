<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<title>Enviar</title>
</head>

<body>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$comentario=$_POST["comentario"];

$destino="lauritagg185@gmail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." asunto: ".$asunto." Mensaje: ".$comentario;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}

$conexion = mysqli_connect("localhost","root","", "contactos") or die('No se pudo conectar al servidor');


// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$asunto','$comentario')");

$consulta = mysqli_query($conexion, "INSERT INTO contactos VALUES ( '$nombre','$email','$motivo','$comentario')") or die(mysqli_error($conexion));



?>
</body>
</html>