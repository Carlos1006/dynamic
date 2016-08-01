<?php
header('Content-Type: application/json');
$correo = "contacto@dynamicsimulation.com.mx";
$asunto = $_POST['asunto'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$cuerpo = "Nombre: ". $nombre ."\nTeléfono: ". $telefono. "\nE-mail: ". $email. "\nMensaje: ". $mensaje;
@mail($correo, $asunto, $cuerpo, null, '-fsales@tis-automation.com');
echo json_encode("Succes!!");