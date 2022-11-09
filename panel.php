<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Artículo</title>
 <meta name = "viewport" content = "width = device-width,initial-scale = 1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    </head>
<body>
<header>

</header>
<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "Hola! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];
echo "<h1>Vive el expresionismo en primera persona</h1></br>

<p class='mar'>Te nombramos algunos lugares en los que puedes disfrutar de esta corriente artística en todo su esplendor.
Algo interesante es que hay museos que cuentan con galerías on-line, de modo que contemplar este arte, si no te puedes desplazar, se convierte en una misión fácil.</br>
<img class='mar' src='imagenes/museoa.jpg' /></br>

Brücke museum. Es uno de los museos más importantes de esta temática. Se ubica en Berlín y contiene la colección más grande de artistas expresionistas.</br>
<img class='mar' src='imagenes/museob.jpg' /></br>

Museo de Jorge Rando. Es el primer museo expresionista en España. Se ubica en Málaga y tiene una sala dedicada al autor neoexpresionista Jorge Rando.
<img class='mar' src='imagenes/museoj.jpg' /></br>

Galerías y museos de expresionismo abstracto. Existe una página web llamada The Art Story, que contiene una lista en la que se encuentran los principales lugares en los que aparece reflejado este tipo de arte.
<img class='mar' src='imagenes/museog.jpg' /></br>

Museo Guggenheim. En Nueva York se encuentra este museo que contiene maravillosas obras expresionistas de artistas como Max Ernst, Wasily Kandinsky y Paul Klee. Además, cuenta con una inigualable colección online.
<img class='mar' src='imagenes/museogu.jpg' /></br>

El expresionismo es, pues, un movimiento cargado de emociones que nos muestra un lado muy profundo del ser humano. La diversidad de este movimiento puede hacer que nos maravillemos con sus múltiples matices. Cada autor es distinto, y nos invita a contemplar su propio lenguaje repleto de mensajes. Definitivamente, es una corriente intensa con un sello auténtico.
<img class='mar' src='imagenes/museoz.jpg' /></br>
</p></br>";
echo "<a class='colorcito' href='salir.php'>Cerrar Sesión</a>";

	
}else{
	echo "<p>Solo usuarios registrados...</p>";
//	include("form_registro.php");
	include("form_login.php");
}
?>

<body>
	<footer>
	
	<div class="fot">
		<a href="políticadecookies.html">política de cookies</a>
		<a href="políticadeprivacidad.html">política de privacidad</a>
		<a href="condicionesdeuso.html">condiciones de uso</a>
	</div>
	<div class="fot">
		<a href="avisolegal.html">aviso legal</a>
		<a href="contacto.html">contactar</a>
		<a>2022 © EISMO.COM</a>
	</div>
		<div class="fot">
		<a href="soporte.html">ayuda y soporte técnico</a>
		<a href="contacto.html">suscríbete a la newsletter</a>
		<a href="mundo.html">EISMO EN EL MUNDO</a>
	</div>
<section class="secredes">
			<div class="redes">
				<a href="http://www.instagram.com"><img src="imagenes/insta.png" alt="Instagram"></a>
			</div>
			<div class="redes">
				<a href="http://www.facebook.com"><img src="imagenes/face.png" alt="Facebook"></a>
			</div>
			<div class="redes">
				<a href="http://www.twitter.com"><img src="imagenes/twiiter.png" alt="Twitter"></a>
			</div>
			<div class="redes">
				<a href="http://www.youtube.com"><img src="imagenes/youtube.png" alt="Whatsapp"></a>
			</div>
 </section>
 <section class="name">
			<a class="name" href="email.html" target="_blank">Laura C Guillen G</a>
 </section>
</footer>
</body>
</html>