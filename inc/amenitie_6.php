<div class="PR wrapperAmen">
<a href="#" id="cerrar">X</a>

<div class="captAmen">
	<h1>Yo pongo<br/> <span class="copy">mi casa</span></h1>
	<p class="mt10">Para eventos especiales donde busques un ambiente diferente y adecuado, invita a tus amigos a divertirse en el Salón de Adultos adecuado con salas, televisores, barra, y casilleros.</p>
	<h3>Salón de adultos</h3>
</div>

<div class="imgAmen">
	<img src="images/amenities_06.jpg" alt="Parque Satélite, Tu Oasis" />
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