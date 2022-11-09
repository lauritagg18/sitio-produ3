
	<div class="cajatitulo">
	 <h1>REGISTRO</h1>
	 <video src="imagenes/videodos.mp4" width="100%" height="460" autoplay muted loop ></video>
	</div>
	<section>
	<article class="articletres">
	<img class="formufoto" src="imagenes/mask.jpg" alt="Cuadro">
	</article>
	<article class="articletres">
	<form action="registro.php" method="post" class="formulogueo">
		<h2 class="reg">Registrate</h2>
		<p>
    	<label>Nombre</label>
        	<input type="text" name="nombre" required>
		</p>
		<p>
		<label>Apellido</label>
        	<input type="text" name="apellido" required>
		</p>
		<p>
        <label>Email</label>
        	<input type="email" name="email" required>
		</p>
		<p>
        <label>Usuario </label>
        	<input name="usuario" type="text" maxlength="12">
		</p>
	    <p>
        <label>Contraseña</label>
        	<input type="password" name="password" maxlength="12">
		</p>
		<p>
        <p>
            <input name="newsletter" type="checkbox" value="si" checked="checked" /> Sí, deseo recibir informacion por mail.
        </p>
		</p>
        <input class="aceptar2" type="submit" value="Registrarse"/>	
    </form>
	</article>
</body>
</html>
