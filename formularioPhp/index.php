<?php

include '../formularioPhp/formulario.php';

 $nombres = 'harrison';
 $apellidos = 'ibarra rojas';
 $tipoDocumento = 'cedula';
 $documento = '1023974256';
 $fechaNacimiento = '1998-12-26';
 $telefono = '3123456789';
 $direccion = 'calle 60 #44-11';
 $ciudad = 'bogota';
 $correo = 'harrison@correo.com';

$userBasic = new formulario ($nombres, $apellidos, $tipoDocumento, $documento, $fechaNacimiento, $telefono, $direccion, $ciudad, $correo);

echo $userBasic->getDataUser();
?>