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
<div class="personal-info">
<h1 style="margin-top:-1em;text-align:center;">Quien Soy</h1>
<div class="img-prof"><img src="{% static 'media/yo.png' %}" alt="Yo" /></div>
<div class="contenido-personal"><p>
Nombre y Apellido : <b>Ciro Rivieccio</b><br>

Edad : <b>23</b><br>
Nacionalidad : <b>Italiana</b><br>
Residencia : <b>España</b><br>
Idiomas : <b>Italiano-Español-Ingles</b><br>
</p></div>

<div class="info-laboral">
<h2>Experiencia Profesional</h2>
<b>Desarrollador Web</b> desde 2016<br>
<b>Responsable Departamento Marketing</b> Doci's Bijoux (www.docisbijoux.it)<br>

<b>Responsable Departamento Marketing</b> Rori Accessorize (www.roriaccessorize.com)<br>
</div>
<div class="info-habilidades">
<h2>Habilidades</h2>
<ul>
<li>
<b>HTML </b>
</li>
<li><b>JavaScript </b></li>
<li><b>CSS </b></li>
<li><b>JQuery </b></li>
<li><b>AJAX </b></li>
<li><b>PHP </b></li>
<li><b>Wordpress - Shopify - Magento - BigCommerce - Prestashop </b></li>
<li><b>Posicionamento SEO/SEM </b></li>
<li><b>Diseño UX/UI </b></li>
</ul>

</div>
</div>
</div>

</main>
{% include 'footer.php' %}
</div>
</body>
</html>