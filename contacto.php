<html>
<head>
	<title>Parque Satélite - Agenda una Cita</title>
	<?php include('inc/head.inc'); ?>
	<meta name="description" content="Haz una Cita con Nuestros Agentes de Ventas. Departamentos de Lujo desde $3,100,000 en Zona Satélite, Estado de México."/>
	<meta name="keywords" content=""/>
	<script type="text/javascript">
		function validacion() {
			v_nombre = document.getElementById('nombre').value;
			if( v_nombre == null || v_nombre.length <= 3 || /^\s+$/.test(v_nombre) ) {
				document.getElementById('adv_n').innerHTML='Campo obligatorio';
				return false;
			} else {
				document.getElementById('adv_n').innerHTML='';
			}

			v_mail = document.getElementById('correo').value;
			reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  			if(reg.test(v_mail) == false) {
				document.getElementById('adv_c').innerHTML='Campo obligatorio';
  				return false;
  			} else {
				document.getElementById('adv_c').innerHTML='';
			}

			v_mensaje = document.getElementById('mensaje').value;
			if( v_mensaje == null || v_mensaje.length <= 10 || /^\s+$/.test(v_mensaje) ) {
				document.getElementById('adv_m').innerHTML='Campo obligatorio';
				return false;
			} else {
				document.getElementById('adv_m').innerHTML='';
			}
			
		return true;
		}
	</script>
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
	<form id="myform" name="myform" action="contacto_s.php" method="POST" onsubmit="return validacion()">
		<label>* Nombre completo <span id="adv_n"></span></label>
		<input type="text" name="nombre" id="nombre" class="requerido" />
		<label>* E-mail  <span id="adv_c"></span></label>
		<input type="text" name="correo" id="correo" class="requerido" />
		<label>* Teléfono</label>
		<input type="text" name="telefono" id="telefono" />
		<label>* Mensaje  <span id="adv_m"></span></label>
		<textarea id="mensaje" name="mensaje"></textarea>
		<input type="submit" value="Enviar" name="submit" id="submit" class="boton"/>
		
		<div class="clearfix"></div>	
	</form>	
	</div>
<div class="clearfix"></div>
</div><!-- / / wrapper -->
<!-- ******************************************************** -->




<?php include('inc/footer.inc'); ?>

<script type="text/javascript">
function responsive_footer(){
	var he = $(window).height(); 
	var wi = $(window).width(); 
	if (he>=990) {
		$('div#footer').css({'position': 'absolute', 'left': '0', 'bottom': '0'});
	} else {
		$('div#footer').css({'position': 'static', 'margin-top' : '30px'});
	}
}

responsive_footer();

$(window).resize(function(){
	responsive_footer();
});

</script>
</body>
</html>

	
