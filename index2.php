<?php
require('conexion.php');
$link = conectarse();

$name = utf8_decode($_POST['nombre']);
$correo = utf8_decode($_POST['correo']);
$telefono = utf8_decode($_POST['telefono']);

mysql_query("INSERT INTO tb_registro_2 VALUES('', '$name','$correo','$telefono')", $link);

$to = 'awp@casasmaxhome.com, rojobara@gmail.com, aweisspick@gmail.com';
$subject = 'Registro Parque Satelite desde Pagina Web - Lanzamiento Torre 2';

$headers = "From: no-reply@parquesatelite.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
$message .= '<table>';
$message .= '<tr><td><strong>Nombre:</strong></td><td>';
$message .= $name;
$message .= '</td></tr><tr><td><strong>Correo:</strong></td><td>';
$message .= $correo;
$message .= '</td></tr><tr><td><strong>Tel&eacute;fono:</strong></td><td>';
$message .= $telefono;
$message .= '</td></tr></table><br/>';
$message .= '<strong>www.parquesatelite.com</strong>';
$message .= '</td></tr></table></body></html>';

mail($to, $subject, $message, $headers) or die ('No se puedo enviar el correo');

?>


<html>
<head>
	<title>Parque Satélite</title>
	<?php include('inc/head.inc'); ?>
</head>
<body>

<?php include('inc/header.inc'); ?>
<script type="text/javascript">$('ul#menu li:nth-child(1) a').addClass('selected');</script>	
<!-- ******************************************************** -->

<div id="badgeProm">
	<h1>Pronto recibirás una invitación VIP para el evento Parque Satélite</h1>
</div>

<?php
include('inc/slider_main.inc'); 
?>	
<!-- ******************************************************** -->



<!-- ******************************************************** -->
<div class="wrapper p30">
	
<div class="w405 ml90 mr30 mb60 floatl">
	<h1>Vive dentro</h1>
	<h1><span class="copy">de un parque.</span></h1>
	<img src="images/Parque_Satelite_render_1.jpg" class="mt10"/>
	<p class="mt15"><strong>Parque Satélite</strong> cuenta con la mejor arquitectura de paisaje que integra un proyecto moderno con la naturaleza y el espacio. Descubre tu espacio en los más de 5,000 m<sup>2</sup> de parque, y disfruta de vivir entre árboles y jardines.</p>
	<p>Sal a caminar sin preocupaciones en los diferentes espacios al aire libre, disfruta de ver a tus hijos jugar en los jardines y desconéctate por un rato de la vida en la ciudad.</p>
</div>	
	
<div class="w405 mb60 floatl">	
	<h1>Invierte en tu<br/>oasis, <span class="copy">tu refugio.</span></h1>
	<img src="images/Parque_Satelite_render_2.jpg" class="mt8" />
	<p class="mt15">El desarrollo consta de 5 exclusivas torres de departamentos. Cuenta con un amplio <strong>Salón de Usos Múltiples</strong>, <strong>Business Center</strong>, <strong>Gimnasio</strong>, <strong>Salón de Adultos</strong>, <strong>Salón de Adolescentes</strong> y <strong>Ludoteca</strong>. Cada torre tiene su propio vestíbulo en la Planta Baja con su área de recepción.</p>
	<p>La excelente orientación de la construcción brinda luz natural durante el día, hay aprovechamiento de agua de lluvia y estacionamiento subterráneo.</p>
</div>

<div class="clearfix"></div>
</div><!-- / / wrapper -->
<!-- ******************************************************** -->

<?php include('inc/footer.inc'); ?>


</body>
</html>

	
