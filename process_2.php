<?php
$name = $_POST['name'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$datepicker = $_POST['datepicker'];
$horario = $_POST['horario'];

$to = 'rojobara@gmail.com, aweisspick@gmail.com, silviachm9@hotmail.com, dmeza@gwep.com.mx';
$subject = 'PARQUE SATELITE ONLINE - Agenda una cita';

$headers = "From: no-reply@parquesatelite.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
$message .= '<table>';
$message .= '<tr><td><strong>Nombre:</strong></td><td>';
$message .= $name;
$message .= '</td></tr><tr><td><strong>Tel&eacute;fono:</strong></td><td>';
$message .= $telefono;
$message .= '</td></tr><tr><td><strong>E-mail:</strong></td><td>';
$message .= $correo;
$message .= '</td></tr><tr><td><strong>Fecha:</strong></td><td>';
$message .= $datepicker;
$message .= '</td></tr><tr><td><strong>Hora:</strong></td><td>';
$message .= $horario;
$message .= ':00 HRS';
$message .= '</td></tr></table><br/>';
$message .= '<strong>www.parquesatelite.com/agenda_una_cita.php</strong>';
$message .= '</td></tr></table></body></html>';

mail($to, $subject, $message, $headers) or die ('No se puedo enviar el correo');

print 'Hemos recibido tu mensaje. Pr&oacute;ximamente recibi&aacute;s respuesta por parte de alguno de nuestros ejecutivos';

?>