<?php
$name = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$to = 'rojobara@gmail.com, aweisspick@gmail.com, silviachm9@hotmail.com, frojas@parquesatelite.com, Fcorojasg80@gmail.com';

$subject = 'PARQUE SATELITE ONLINE - Mándanos un E-mail';

$headers = "From: no-reply@parquesatelite.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
$message .= '<table>';
$message .= '<tr><td><strong>Nombre:</strong></td><td>';
$message .= $name;
$message .= '</td></tr><tr><td><strong>E-mail:</strong></td><td>';
$message .= $correo;
$message .= '</td></tr><tr><td><strong>Tel&eacute;fono:</strong></td><td>';
$message .= $telefono;
$message .= '</td></tr><tr><td><strong>Mensaje:</strong></td><td>';
$message .= $mensaje;
$message .= '</td></tr></table><br/>';
$message .= '<strong>www.parquesatelite.com/contacto.php</strong>';
$message .= '</td></tr></table></body></html>';

mail($to, $subject, $message, $headers) or die ('No se puedo enviar el correo');
?>

<html>
<head>
	<title>Parque Satélite - Agenda una Cita</title>
	<?php include('inc/head.inc'); ?>
	<meta name="description" content="Haz una Cita con Nuestros Agentes de Ventas. Departamentos de Lujo desde $3,100,000 en Zona Satélite, Estado de México."/>
	<meta name="keywords" content=""/>
	<meta name="robots" content="noindex,nofollow">
</head>
<body>

<?php include('inc/header.inc'); ?>
<script type="text/javascript">$('ul#menu li:nth-child(6) a').addClass('selected');</script>	
<!-- ******************************************************** -->

<div id="subnav">
<ul id="submen">
	<li><a href="contacto.php" target="_self" id="activo">Mándanos un e-mail</a></li>
	<li><a href="agenda_una_cita.php" target="_self">Agenda una cita</a></li>
	<li><a href="te_llamamos.php" target="_self">Nosotros te llamamos</a></li>
</ul>
<div class="clearfix"></div>
</div><!-- / / wrapper -->

<!-- ******************************************************** -->

<div class="wrapper bgBoceto">
	<div id="thx">
	<h1>Hemos recibido tu mensaje.<br/><br/>
	A la brevedad uno de nuestros ejecutivos responderá a tus dudas.</h1>
	</div>
<div class="clearfix"></div>
</div><!-- / / wrapper -->
<!-- ******************************************************** -->




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

	
