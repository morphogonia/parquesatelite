<div class="PR wrapperAmen">
<a href="#" id="cerrar">X</a>

<div class="captAmen">
	<h1>Tiempo<br/> <span class="copy">para mí</span></h1>
	<p class="mt10">Ahorra tiempos de traslado y disfruta de una vida saludable y llena de energía yendo al Gimnasio a tan solo unos pasos de tu hogar.</p>
	<h3>Gimnasio</h3>
</div>

<div class="imgAmen">
	<img src="images/amenities_04.jpg" alt="Parque Satélite, Tu Oasis" />
</div>

<div class="clearfix"></div>
</div>

<script type="text/javascript">
$('a#cerrar').click(function(){	
	bol=0;
	$('html:not(:animated),body:not(:animated)').animate({ scrollTop: 0}, 500, function(){
		$('div.AM').fadeOut(400);
		responsive_footer('div#gris');
	});
	return false;
	
});
</script>