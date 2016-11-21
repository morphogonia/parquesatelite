<html>
<head>
	<title>Parque Satélite - Video Promocional</title>
	<?php include('inc/head.inc'); ?>
	<meta name="description" content="Moderno Proyecto Arquitectónico en Zona Satélite. Descubre tu Espacio en los más de 5,000 m2 de Parque. Parque Satélite, tu Oasis, tu Refugio."/>
	<meta name="keywords" content=""/>
</head>
<body>

<?php include('inc/header.inc'); ?>
<script type="text/javascript">$('ul#menu li:nth-child(2) a').addClass('selected');</script>	
<!-- ******************************************************** -->

<div id="video">
<iframe src="//player.vimeo.com/video/87803287" width="720" height="406" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>


<?php include('inc/footer.inc'); ?>




<script type="text/javascript">
function responsive_footer(){
var wi = $(window).height(); 
var he = $(window).width(); 

if (he<=840) {

if (wi>=1200) {
	$('div#footer').css({'position': 'absolute', 'left': '0', 'bottom': '0'});
} else {
	$('div#footer').css({'position': 'static', 'margin-top' : '30px'});
}

} else {

if (wi>=880) {
	$('div#footer').css({'position': 'absolute', 'left': '0', 'bottom': '0'});
} else {
	$('div#footer').css({'position': 'static', 'margin-top' : '30px'});
}

}

}

responsive_footer();

$(window).resize(function(){
	responsive_footer();
});

</script>



</body>
</html>

	
