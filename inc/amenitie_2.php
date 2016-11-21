<div class="PR wrapperAmen">
<a href="#" id="cerrar">X</a>

<div class="captAmen">
	<h1>Yo armo,<br/> <span class="copy">la fiesta</span></h1>
	<p class="mt10">Para todos esos eventos que no caben en tu departamento, aprovecha el espacioso Salón de Usos Múltiples con capacidad para 120 personas y disfruta con familiares y amigos.</p>
	<h3>Salón de usos múltiples</h3>
</div>

<div class="imgAmen">
	<img src="images/amenities_02.jpg" alt="Parque Satélite, Tu Oasis" />
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