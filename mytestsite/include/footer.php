<div class="divido-prepie"></div>
<section class="pre-pie">
<style>

</style>
<script>
function slideshow_vertical () {
	setInterval(function (){
		$imagenMostrada = $(".slideshow-container .mySlides:last-child");
				
		$imagenMostrada.animate({height: "0px"},2000,function() {
			$imagenMostrada.prependTo(".slideshow-container");
		});

		$imagenMostrada.animate({height: "400px"},0);
	}, 5000);
}

slideshow_vertical ();
</script>
<h2 style="text-align:center"><a name="trabajo"> Trabajos </a></h2>
<div class="slideshow-container">
<div class="mySlides">

       <a target="_blank" href="https://www.louriv.com"><img src="louriv.png"></a>
       <div class="text">LouRiv Accessorize</div>
</div>

<div class="mySlides">
       <a target="_blank"  href="https://www.docisbijoux.it"><img src="docis.png"></a>
       <div class="text">Doci's Bijoux</div>
</div>

<div class="mySlides">
 
       <a target="_blank"  href="https://www.roriaccessorize.com"><img src="rori.png"></a>
       <div class="text">Rori Accessorize</div>
</div>

</div>

<div class="social-media"></div>
</section>

<footer class="pie"> <p>Copyright 2020 - Created by Ciro Rivieccio</p></footer>