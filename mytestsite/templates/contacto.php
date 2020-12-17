<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CiroTech</title>
{% load static %}
{% include 'head.html' %}


</head>
<body>
<div id="wrapper">
<header id="header"> 
{% include 'header.php' %}
</header>
{% include 'nav.php' %}
<main class="contenido">
<div class="row">
<div class="container-contact">
<h1>Contactame </h1>
<form method="POST" action="" id="contact">
<fieldset>
<input type="text" value=""  placeholder="Nombre * :" name="nombre" required /><br>
</fieldset>
<fieldset>
<input type="email" value=""  placeholder="Correo Electronico * :" name="email" required />
</fieldset>
<fieldset>
<input type="tel" value="" placeholder="Telefono * :" name="nombre" required />
</fieldset>
<fieldset>
<input type="tel" value="" placeholder="Pagina Web :" name="nombre" />
</fieldset>
<fieldset>
<textarea value=""  placeholder="Mensaje * :" name="mensaje" required /></textarea>
</fieldset>
<fieldset>
<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envia</button>
</fieldset>
</form>
</div>
</div>

</main>
{% include 'footer.php' %}
</div>
</body>
</html>