<?php
// *** Llamando a los campos ***
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$mensaje= $_POST['mensaje'];

// *** Datos para el correo ***
$destinatario = "leoarancibiak@hotmail.com";
$asunto = "Contacto desde la web";

$carta = "De:\t $nombre \n\n";
$carta .= "Correo:\t $correo \n\n";// .= concatena
$carta .= "Mensaje:\t $mensaje";


// *** Enviando mensaje ***

mail($destinatario,$asunto,$carta);
header('Location:mensajeEnviado.html');
?>