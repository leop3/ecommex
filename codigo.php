<?php
    $correo = $_POST['correo'];
    $asunto = "Peticion de Codigo promocional.";
    $destinatario = "info@mundo-comex.com.ar";

    $carta = "Correo del solicitante del codigo:\t $correo";

    mail($destinatario,$asunto,$carta);
    header('Location:mensajeEnviado.html'); 
?>