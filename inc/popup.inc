
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

			v_telefono = document.getElementById('telefono').value;
			if( v_telefono == null || v_telefono.length <= 5 || /^\s+$/.test(v_telefono) ) {
				document.getElementById('adv_m').innerHTML='Campo obligatorio';
				return false;
			} else {
				document.getElementById('adv_m').innerHTML='';
			}
			
		return true;
		}
</script>

<div id="opacidad">
<div id="reply">
<a href="#" id="saltar">X</a>

<h1 class="mb30">Regístrate y recibe una invitación VIP para el coctel de lanzamiento de la</h1>
<img src="images/parque_satelite_2a_torre.png" class="mb10"/>
<p>del desarrollo</p>
<img src="images/parque_satelite_logo_promo.png" alt="Parque Satélite"/>

<form id="mypromo" name="mypromo" action="index2.php" method="POST" onsubmit="return validacion()">
	<label>* Nombre <span id="adv_n"></span></label>
	<input type="text" name="nombre" id="nombre" class="requerido" />
	<label>* Correo <span id="adv_c"></span></label>
	<input type="text" name="correo" id="correo" class="requerido" />
	<label>Teléfono <span id="adv_m"></span></label>
	<input type="text" name="telefono" id="telefono" />
	<p class="disc">* campos obligatorios</p>
	<input type="submit" value="Registrarme" name="submit" id="submit" class="boton"/>
	<div class="clearfix"></div>
</form>

</div></div><!-- /opacidad, reply -->

