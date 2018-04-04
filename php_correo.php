<?php

$destino="begoo132000@gmail.com";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["correo"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\Telefono: " . $telefono . "\nMensaje: " . $mensaje; 

mail($destino, "Contacto" , $contenido);

header("Location:gracias.html");
?>