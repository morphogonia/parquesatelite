<?php
require('conexion.php');
$link = conectarse();

$name = utf8_decode($_POST['name']);
$correo = utf8_decode($_POST['correo']);
$telefono = utf8_decode($_POST['telefono']);

mysql_query("INSERT INTO tb_registro_2 VALUES('', '$name','$correo','$telefono')", $link);

$to = 'awp@casasmaxhome.com, rojobara@gmail.com, aweisspick@gmail.com, dmeza@gwep.com.mx';
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

print '<a href="#" id="saltar">X</a><h1 class="mb30">Hemos recibido tus datos. Pr&oacute;ximamente recibi&aacute;s tu <strong>Invitaci&oacute;n VIP</strong> personal para el coctel de lanzamiento de la segunda torre de Parque Sat&eacute;lite.</h1>';

?>
