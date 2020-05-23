<?php
// *** Llamando a los campos ***
$razon=$_POST['razonSocial'];
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
$destinatario = "feria1virtual@gmail.com";
$asunto = "Inscripcion feria";
$from = 'inscripciones@ecommex.com.ar';
$headers = "From:" . $from;

// *** Cuerpo del mensaje ***
$carta = "Razon Social:\t $razon \n\n";
$carta .= "Firmante:\t $firmante \n\n";
$carta .= "Contacto:\t $contacto \n\n";
$carta .= "Pais:\t $pais \n\n";
$carta .= "Ciudad:\t $ciudad \n\n";
$carta .= "Direccion:\t $direccion \n\n";
$carta .= "Cuit:\t $cuit \n\n";
$carta .= "Telefono:\t $telefono \n\n";
$carta .= "Descripcion:\t $descripcion \n\n";
$carta .= "Pabellon:\t $pabellon \n\n";
$carta .= "Stand:\t $stand \n\n";
$carta .= "Productos:\t $productos \n\n";
$carta .= "Wsp1:\t $wsp1 \n\n";
$carta .= "Wsp2:\t $wsp2 \n\n";
$carta .= "Correo:\t $correo \n\n";
$carta .= "Pagina:\t $pagina \n\n";
$carta .= "PAGO:\n";
$carta .= "Fecha:\t $fecha \t";
$carta .= "Deposito:\t $deposito \t";
$carta .= "Total:\t $total";


// *** Enviando mensaje ***

mail($destinatario,$asunto,$carta,$headers);
header('Location:inscripcionEnviada.html');
?>
