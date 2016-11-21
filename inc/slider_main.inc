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
		return true;
		}
	</script>
	
<div class="slider">
	<div class="preloader"></div>
	<div class="images"></div>
	<div class="clearfix"></div>
	<!-- <a href="#" class="prev">Prev</a> -->
	<a href="#" class="next">Next</a>
	
	<a href="#" id="bottom">VIVE</a>
	
	<!--<div id="badgeD">Promo</div>-->
	
	<div id="form-home">
	<div id="thx">
	<form id="myform" name="myform" action="contacto_h.php" method="POST" onsubmit="return validacion()">
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
	</div>
	
	<div id="badgeD"></div>
	<div id="badgeE"></div>
	
	<div class="clearfix"></div>
</div>

<div id="badgeA"><h1><a href="agenda_una_cita.php" target="_self">VISITA DEPARTAMENTO MUESTRA</a></h1></div>

