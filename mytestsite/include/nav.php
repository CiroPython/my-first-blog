<hr class="movil-divido" style="display:none;">
<nav class="menu">
<ul>
<li><a href="index.php">Home</a></li>

<li><a href="quiensoy.php">Quien Soy</a></li>

<li><a href="#trabajo">Trabajos</a></li>

<li><a href="contacto.php">Contacto</a></li>
</ul>
</nav>
<div class="menu_bar">
<a href="#" class="bt-menu"><img src="menu.png" width="30" height="26" /></a>
</div>
<nav class="mini-menu">
<ul>
<li><a href="index.php">Home</a></li>

<li><a href="quiensoy.php">Quien Soy</a></li>

<li><a href="#trabajo" class="trabajo">Trabajos</a></li>

<li><a href="contacto.php">Contacto</a></li>
</ul>
</nav>
<script type="text/javascript"> 
$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); 
	
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
 
	});
	$('.trabajo').click(function(){
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
 
};
	</script>