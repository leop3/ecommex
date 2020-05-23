<?php
// *** Llamando a los campos ***
$razon=$_POST['razonSocial']
$firmante=$_POST['firmante'];
$contacto=$_POST['contacto'];
$pais=$_POST['pais'];
$ciudad=$_POST['ciudad'];
$direccion=$_POST['direccion'];
$cuit=$_POST['cuit'];
$telefono=$_POST['telefono'];
$descripcion=$_POST['descripcion'];
$pabellon=$_POST['pabellon'];
$stand=$_POST['stand'];
$productos=$_POST['productos'];
$wsp1=$_POST['wsp1'];
$wsp2=$_POST['wsp2'];
$correo=$_POST['correo'];
$pagina=$_POST['pagina'];
$fecha=$_POST['fecha'];
$deposito=$_POST['deposito'];
$total=$_POST['total'];


// *** Datos para el correo ***
// $destinatario = "info@mundo-comex.com.ar";
$destinatario = "leoarancibiak@hotmail.com";
$asunto = "Inscripcion feria";

// $carta = "De:\t $nombre \n\n";
// $carta .= "Correo:\t $correo \n\n";// .= concatena
// $carta .= "Mensaje:\t $mensaje";
$carta = "Razon Social: $razon \n\n"
$carta .= "firmante:\t $firmante \n\n";
$carta .= "contacto:\t $contacto \n\n";
$carta .= "pais:\t $pais \n\n";
$carta .= "ciudad:\t $ciudad \n\n";
$carta .= "direccion:\t $direccion \n\n";
$carta .= "cuit:\t $cuit \n\n";
$carta .= "telefono:\t $telefono \n\n";
$carta .= "descripcion:\t $descripcion \n\n";
$carta .= "pabellon:\t $pabellon \n\n";
$carta .= "stand:\t $stand \n\n";
$carta .= "productos:\t $productos \n\n";
$carta .= "wsp1:\t $wsp1 \n\n";
$carta .= "wsp2:\t $wsp2 \n\n";
$carta .= "correo:\t $correo \n\n";
$carta .= "pagina:\t $pagina \n\n";
$carta .= "fecha:\t $fecha \n\n";
$carta .= "deposito:\t $deposito \n\n";
$carta .= "total:\t $total";


// *** Enviando mensaje ***

mail($destinatario,$asunto,$carta);
header('Location:inscripcionEnviada.html');
?>