<html>
<head>
	<title>Parque Satélite - Amenidades</title>
	<?php include('inc/head.inc'); ?>
	<meta name="description" content="El desarrollo Parque Satélite cuenta con Salón de Usos Múltiples, Business Center, Gimnasio, Salón de Adultos, Salón de Adolescentes y Ludoteca."/>
	<meta name="keywords" content=""/>
</head>
<body id="gray">

<?php include('inc/header.inc'); ?>
<script type="text/javascript">$('ul#menu li:nth-child(3) a').addClass('selected');</script>	
<!-- ******************************************************** -->

<div id="gris">
<div class="wrapper">
	
<div id="amenities">

<div id="amenities_desc">
	<h1 class="mb20">Amenidades</h1>
	<p>El desarrollo cuenta con <a href="#" target="_self" class="lAM" rel="inc/amenitie_2.php">Salón de Usos Múltiples</a>, <a href="#" target="_self" class="lAM" rel="inc/amenitie_1.php">Business Center</a>, <a href="#" target="_self" class="lAM" rel="inc/amenitie_4.php">Gimnasio</a>, <a href="#" target="_self" class="lAM" rel="inc/amenitie_6.php">Salón de Adultos</a>, <a href="#" target="_self" class="lAM" rel="inc/amenitie_3.php">Salón de Adolescentes</a> y <a href="#" target="_self" class="lAM" rel="inc/amenitie_5.php">Ludoteca</a>.</p>
	<p>Cada torre tiene su propio vestíbulo en la Planta Baja con su área de recepción.</p>
</div>
<div class="clearfix"></div>

<ul id="spaces">
	<li><a href="#" target="_self" id="a1" rel="inc/amenitie_1.php"><h2>Torre 1</h2>Business Center</a></li>
	<li><a href="#" target="_self" id="a2" rel="inc/amenitie_2.php"><h2>Torre 2</h2>Salón de usos múltiples y</a><br/><a href="#" target="_self" id="a6" rel="inc/amenitie_6.php">Salón de adultos</a></li>
	<li><a href="#" target="_self" id="a3" rel="inc/amenitie_3.php"><h2>Torre 3</h2>Salón de<br/>adolescentes</a></li>
	<li><a href="#" target="_self" id="a4" rel="inc/amenitie_4.php"><h2>Torre 4</h2>Gimnasio</a></li>
	<li><a href="#" target="_self" id="a5" rel="inc/amenitie_5.php"><h2>Torre 5</h2>Ludoteca</a></li>
</ul>

</div><!-- / / amenities -->

<div class="clearfix"></div>
</div></div><!-- / / wrapper // gris -->

<div class="AM" id="gris_claro">
<img src="images/_slider_preloader.gif" />
</div><!-- / / -->
















<!-- ******************************************************** -->

<?php include('inc/footer.inc'); ?>

<script type="text/javascript">
var bol = 0;
function responsive_footer(){
	var wi = $(window).height();
	$('div#footer').css({'position': 'static', 'margin-top' : '0px'});
}

responsive_footer();

$(window).resize(function(){
	responsive_footer();
});
</script>

</body>
</html>

