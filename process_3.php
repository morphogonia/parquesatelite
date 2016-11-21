<?php
$name = $_POST['name'];
$telefono = $_POST['telefono'];

$to = 'rojobara@gmail.com, aweisspick@gmail.com, silviachm9@hotmail.com, dmeza@gwep.com.mx';
$subject = 'PARQUE SATELITE ONLINE - Nosotros te llamamos';

$headers = "From: no-reply@parquesatelite.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
$message .= '<table>';
$message .= '<tr><td><strong>Nombre:</strong></td><td>';
$message .= $name;
$message .= '</td></tr><tr><td><strong>Tel&eacute;fono:</strong></td><td>';
$message .= $telefono;
$message .= '</td></tr></table><br/>';
$message .= '<strong>www.parquesatelite.com/te_llamamos.php</strong>';
$message .= '</td></tr></table></body></html>';

mail($to, $subject, $message, $headers) or die ('No se puedo enviar el correo');

print 'Hemos recibido tu mensaje. Pr&oacute;ximamente recibi&aacute;s respuesta por parte de alguno de nuestros ejecutivos';

?>