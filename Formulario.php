<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORMULARIO</title>
	<link rel="stylesheet" type="text/css" href="estilo_formulario.css">
	<link rel="stylesheet" type="cookie" href="cookie.html">
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
</head>
<body>
	<header>
		<div class="wrap">
			<div class="cube">
				<div class="front"><img src="INFOLUTIONS_LOGO.PNG" class="logoinfo"></div>
				<div class="back"><img src="INFOLUTIONS_LOGO.PNG" class="logoinfo"></div>
				<div class="top">INFOLUTIONS</div>
				<div class="bottom">INFOLUTIONS</div>
				<div class="left">INFOLUTIONS</div>
				<div class="right">INFOLUTIONS</div>
			</div>
		</div>
		<nav id="block">
			<ul id="menu">
				<li><a href="#" class="three-d">
					<span class="three-d-box">
						<span class="frente">Quienes Somos</span>
						<span class="atras">Conoce a nuestros profesionales</span>
					</span>
				</a></li>
				<li><a href="#" class="three-d">
					<span class="three-d-box">
						<span class="frente">Nuestra Empresa</span>
						<span class="atras">Nuestra Historia</span>
					</span>
				</a></li>
				<li><a href="#" class="three-d">
					<span class="three-d-box">
						<span class="frente">Que Ofrecemos</span>
						<span class="atras">Descubre nuestro producto</span>
					</span>
				</a></li>
				<li><a href="index.html" class="three-d">
					<span class="three-d-box">
						<span class="frente">Inicio</span>
						<span class="atras">Volver al Inicio</span>
					</span>
				</a></li>
			</ul>
		</nav>
		<nav id="login">
			<ul>
				<li><a href="#" title="Iniciar Sesion">Log In</a></li>
				<li><a href="#" title="¿No tienes cuenta? ¡Registrate!">Registro</a></li>
			</ul>
		</nav>
	</header>
	<section id="section1">
        <div id="info" class="info">
            <div class="infolu f1">I</div>
            <div class="infolu f2">N</div>
            <div class="infolu f3">F</div>
            <div class="infolu f4">O</div>
            <div class="infolu f5">L</div>
            <div class="infolu f6">U</div>
            <div class="infolu f7">T</div>
            <div class="infolu f8">I</div>
            <div class="infolu f9">O</div>
            <div class="infolu f10">N</div>
            <div class="infolu f11">S</div>
        </div>
	</section>
	<section id="section2">
		<form method='post' action='RecibirDatos.php'>
		<fieldset>
    		<legend>Informaci&oacuten Personal</legend>
    		Nombre:<label><input type="text" name="nombre" size="55" placeholder="Introduzca su nombre" required pattern="[A-Za-z]+" autofocus title="Solo letras"></label><br>
    		Apellidos:<label><input type="text" name="apellido" size="55" placeholder="Introduzca su apellido" required pattern="[A-Za-z ]+" autofocus title="Solo letras"></label><br>
    		G&eacutenero:<label>
			<input type="radio" name="Genero" value="Hombre" required autofocus title="Selecciona una opción">Hombre<br>
			<input type="radio" name="Genero" value="Mujer">Mujer<br>
			<input type="radio" name="Genero" value="Otro">Otr@<br></p></label>
    		Tel&eacutefono:<label><input type="tel" name="telefono" size="20" placeholder="Introduzca su telefono" required pattern="[0-9]{9}" autofocus title="Solo numeros, 9 numeros"></label><br>
    		eMail:<label><input type="email" name="email" size="55" placeholder="Ej.: usuario@servidor.com" autofocus required></label><br>
    		DNI:<label><input type="text" name="dni" size="20" placeholder="NumerosLetra" autofocus required pattern="[A-Za-z0-9]{9}" title="8 Numeros y 1 Letra"></label><br>
    		<p>Ciudad: <select name="ciudad" required autofocus placeholder="Selecciona una opción">
    		<option value="">Selecciona una opción</option>
    		<option>Muskiz</option>
    		<option>Santurtzi</option>
    		<option>Gallarta</option>
   			<option>Santurtzi</option>
   			<option>Portugalete</option>
    		<option>Castro</option>
    		<option>Sestao</option>
    		<option>Barakaldo</option>
   			<option>Galdames</option>
   			<option>Trapagar&aacuten</option>
   			<option>Otra</option>
   			</select></p>	
		</fieldset><br>
		<fieldset>
			<legend>Informaci&oacuten Adicional</legend><p><textarea class="formulario" name="mensaje" cols="52" rows="6" autofocus></textarea></p>
		</fieldset><br>
		<div class="g-recaptcha" data-sitekey="6LccFI0UAAAAABiiU24wvO559IzzjSxhtbJB6EgE"></div>
		<section id="envio">
  			<input type="submit" value="Enviar" autofocus>
  			<input type="reset" value="Restaurar" autofocus>
  		</section>
		</form>
	</section>

	<footer>
		
	</footer>
</body>
</html>