<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Expresionismo/Logueo</title>
	<meta name = "viewport" content = "width = device-width,initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
	</head>
<body>
<header>
		<nav>
			<ul>
			<a href="origen.html">Origen</a>
			<a href="filosofia.html">Filosofia</a>
			<a href="artistas.html">Artistas</a>
			<a href="galeria.html">Galería</a>
			<a href="contacto.html">Contacto</a>
		
	  <div class="btn"> 
	  <img class="lupa" src="imagenes/lupa.png" alt="lupa">
	  <form class="buscar" action="resultados_buscar.php" method="post"> 
	  <input type="search" name="buscar" placeholder="Buscar..." />
      <input type="submit" value="Enviar">
	    </form>
  </div>
	<ul>	<a href="index.html"><img class="logo" src="imagenes/Expresionismo.png" alt="Expresionismo"></a>
	        <img class="logueo" src="imagenes/Logueo.png" alt="Ícono de logueo">
				<li><a href="registro.html">Registro</a></li>
			    <li><a href="login.html">Logueo</a></li>
		</ul>
	    </ul>
</nav>
</header>
<body>

<?php
$usuario=$_POST['usuario'];
$password=md5($_POST['password']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, apellido, email FROM usuarios WHERE usuario='$usuario' AND password='$password'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
		
		echo "<p>Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."</p><br />";
		echo "<p>Acceso al artículo exclusivo.</p><br/>";
		echo "<a class='colorcito' href='panel.php'>Artículo</a><br/>";
		echo "<a class='colorcito' href='salir.php'>Cerrar Sesión</a></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>";	

}else{
	echo "<p>No es un usuario registrado </p></br></br></br></br></br></br>";
	include ("form_registro.php");
}


?>
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