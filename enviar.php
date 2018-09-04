<?php
// echo "por que poronga no funcion"
// *** Llamando a los campos ***
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$mensaje= $_POST['mensaje'];

// *** Datos para el correo ***
$destinatario = "leoarancibiak@hotmail.com";
$asunto = "Contacto desde la web";

$carta = "De $nombre \n";
$carta .= "Correo: $correo \n";// .= concatena
$carta .= "Mensaje: $mensaje";


// *** Enviando mensaje ***

mail($destinatario,$asunto,$carta);
header('Location:mensajeEnviado.html');
?>